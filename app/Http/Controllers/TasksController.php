<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\District;
use App\Models\Infrastructure;
use App\Models\Task;
use App\Models\Years;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function PHPUnit\Framework\isFalse;

class TasksController extends Controller
{
    //

    public function index()
    {
        $roads      = Infrastructure::where('type', 'road')->whereNull('deleted_at')->count();
        $bridge     = Infrastructure::where('type', 'bridge')->whereNull('deleted_at')->count();

        return view('task.index', [
            'roads'     => $roads,
            'bridges'   => $bridge,
            'task_run'  => 0,
            'task_end'  => 0,
            'years'     => Years::whereNull('deleted_at')->get()
        ]);
    }

    public function infrastructure(Request $request)
    {
        $infrastructure = new Infrastructure();

        if ($request->input('type') == 'road') {
            // road
            $infrastructure->code       = $request->input('add-road-code');
            $infrastructure->name       = $request->input('add-road-name');
            $infrastructure->type       = 'road';
            $infrastructure->district   = implode(",", $request->input('add-road-district'));
            $infrastructure->length       = $request->input('add-road-length');
            $infrastructure->width       = $request->input('add-road-width');
            $infrastructure->good_condition       = $request->input('add-road-good');
            $infrastructure->medium_condition       = $request->input('add-road-medium');
            $infrastructure->slight_damage_condition       = $request->input('add-road-slight');
            $infrastructure->severely_damage_condition       = $request->input('add-road-severely');

            $save       = $infrastructure->save();
        } else {
            // bridge

        }

        if ($save) {
            $status     = 'success';
            $message    = ($request->type == 'road') ? 'Ruas Jalan ' . $request->input('add-road-name') . ' berhasil disimpan' : 'Jembatan ' . $request->input('add-bridge-name') . ' berhasil disimpan';
        } else {
            $status     = 'success';
            $message    = ($request->type == 'road') ? 'Ruas Jalan ' . $request->input('add-road-name') . ' gagal disimpan' : 'Jembatan ' . $request->input('add-bridge-name') . ' gagal disimpan';
        }

        return redirect('tasks')->with(['status' => $status, 'message' => $message]);
    }

    public function store(Request $request)
    {
        echo json_encode($request->input());
    }

    public function detail(Request $request)
    {
        if (empty($request->query('refer'))) {
            return redirect('tasks');
        }

        $infrastructure             = Infrastructure::where('code', $request->query('refer'))->first();
        $infrastructure->district   = explode(",", $infrastructure->district);

        foreach ($infrastructure->district as $district => $value) {
            $data[]               = District::find($value);
//            $infrastructure->district               = District::find($district);
        }

        $data_map                   = array_map(function ($object) {
            return "Kec. " . $object->name;
        }, $data);

        $infrastructure->district   = implode(", ", $data_map);

        $year                       = $request->query('year');
        $category                   = $request->query('category');

        if (!empty($category)) {
            $where['category']      = $request->query('category');
        }

//        $infrastructure->planner    = Task::where(['infrastructures' => $infrastructure->id, 'years' => $request->query('year'), 'type' => 'perencanaan'])
//                                    ->where((Session()->get('x-user-role') == 'consultant') ? array('consultants' => Session()->get('x-consultant'))  : array(array('consultants', '!=', '0')))
//                                    ->whereNull('deleted_at')
//                                    ->first();
//
//        $infrastructure->supervisor = Task::where(['infrastructures' => $infrastructure->id, 'years' => $request->query('year'), 'type' => 'pengawas'])
//            ->where((Session()->get('x-user-role') == 'consultant') ? array('consultants' => Session()->get('x-consultant'))  : array(array('consultants', '!=', '0')))
//            ->whereNull('deleted_at')
//            ->first();
//
//        $infrastructure->contractor = Task::where(['infrastructures' => $infrastructure->id, 'years' => $request->query('year'), 'type' => 'konstruksi'])
//            ->where((Session()->get('x-user-role') == 'consultant') ? array('consultants' => Session()->get('x-consultant'))  : array(array('consultants', '!=', '0')))
//            ->whereNull('deleted_at')
//            ->first();

        $years                  = Years::whereNull('deleted_at')->get();

        return view('task.detail', [
            'infrastructure'    => $infrastructure,
            'years'             => $years
        ]);
    }

    public function day_report(Request $request)
    {

    }
    public function administration()
    {
        return view('task.administration.index');
    }

    public function stage_1(Request $request)
    {
        return view('task.administration.stage_1');
    }

    public function get_roads(Request $request)
    {
        $where      = array(
            'type'  => 'road'
        );

        if (!empty($request->query('year'))) {
//            $where['year']  = $request->query('year');
        }

        if (!empty($request->query('available'))) {

        }

        if (!empty($request->query('condition'))) {

        }

        if (!empty($request->query('surface'))) {

        }

        if (!empty($request->query('status'))) {

        }

        $roads  = Infrastructure::where($where)->whereNull('deleted_at')->get();
        foreach ($roads as $road) {
            $road->planner    = Task::where(['infrastructures' => $road->id, 'type' => 'perencanaan'])
                ->where('years', $request->query('year'))
                ->where((Session()->get('x-user-role') == 'consultant') ? array('consultants' => Session()->get('x-consultant'))  : array(array('consultants', '!=', '0')))
                ->whereNull('deleted_at')
                ->first();

            if (!empty($road->planner)) {
                $road->planner->consultants = Consultant::find($road->planner->consultants);
            }

            $road->supervisor   = Task::where(['infrastructures' => $road->id, 'type' => 'pengawas'])
                ->where('years', $request->query('year'))
                ->where((Session()->get('x-user-role') == 'consultant') ? array('consultants' => Session()->get('x-consultant'))  : array(array('consultants', '!=', '0')))
                ->whereNull('deleted_at')
                ->first();

            if (!empty($road->supervisor)) {
                $road->supervisor->consultants = Consultant::find($road->supervisor->consultants);
            }

            $road->contractor   = Task::where(['infrastructures' => $road->id, 'type' => 'konstruksi'])
                ->where('years', $request->query('year'))
                ->where((Session()->get('x-user-role') == 'consultant') ? array('consultants' => Session()->get('x-consultant'))  : array(array('consultants', '!=', '0')))
                ->whereNull('deleted_at')
                ->first();

            if (!empty($road->contractor)) {
                $road->contractor->consultants = Consultant::find($road->contractor->consultants);
            }
        }

        if (Session()->get('x-user-role') == 'consultant') {
            foreach ($roads as $roadKey => $road) {
                if (empty($road->planner) && empty($road->supervisor) && empty($road->contractor)) {
                    unset($roads[$roadKey]);
                }
            }
        }

        return response()->json([
            'data'  => $roads,
            'year'  => $request->query('year')
        ]);
    }

    public function get_report_by_days()
    {
        return response()->json([
            'data'  => [
                [
                    "id" => 1,
                    "cat_image" => "product-1.png",
                    "categories" => "Smart Phone",
                    "category_detail" => "Choose from wide range of smartphones from popular brands",
                    "total_earnings" => "$99129",
                    "total_products" => 1947
                ],
                [
                    "id" => 2,
      "cat_image" => "product-2.png",
      "categories" => "Electronics",
      "category_detail" => "Choose from wide range of electronics from popular brands",
      "total_earnings" => "$2512.50",
      "total_products" => 7283
                ],
                [
                    "id" => 3,
      "cat_image" => "product-3.png",
      "categories" => "Clocks",
      "category_detail" => "Choose from wide range of clocks from popular brands",
      "total_earnings" => "$1612.34",
      "total_products" => 2954
                ],
            ]
        ]);
    }

    public function get_district_json(Request $request)
    {
        $districts  = new District();
        $data       = $districts->get_all_where_limit($request->query('search'), $request->query('page'));

        if (!empty($data['districts'])) {
            foreach ($data['districts'] as $d) {
                $d->text    = $d->name;
            }
        }

        return response()->json([
            'totalRows'     => $data['totalRows'],
            'results'       => $data['districts'],
            'pagination'    => ['more' => true]
        ]);
    }

    public function get_consultant_json(Request $request)
    {
        $search     = $request->query('search');
        if (!empty($search)) {
            $consultant     = Consultant::where('id', $search)->whereNull('deleted_at')->first();
            if (!empty($consultant)) {
                $status     = 'success';
                $message    = 'Data ditemukan';
            } else {
                $status     = 'failed';
                $message    = 'Data tidak ditemukan';
            }
        } else {
            $status         = 'failed';
            $message        = 'Data tidak dapat dicari!';
            $consultant     = null;
        }

        return response()->json(array('status' => $status, 'message' => $message, 'data' => $consultant));
    }

    public function get_years_json(Request $request)
    {
        $years      = new Years();
        $data       = $years->get_all_where_limit($request->query('search'), $request->query('page'));

        if (!empty($data['years'])) {
            foreach ($data['years'] as $d) {
                $d->id      = $d->name;
                $d->text    = $d->name;
            }
        }

        return response()->json([
            'totalRows'     => $data['totalRows'],
            'results'       => $data['years'],
            'pagination'    => ['more' => true]
        ]);

    }
    public function testing()
    {
        echo json_encode(Session()->all());
    }
}
