<?php

namespace Modules\CulinaryPlace\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;

use Modules\CulinaryPlace\Repositories\CulinaryPlaceRepository;
use Modules\AreaLocation\Repositories\AreaLocationRepository;
use App\Helpers\DataHelper;
use App\Helpers\LogHelper;
use DB;

class CulinaryPlaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->_culinaryPlaceRepository   = new CulinaryPlaceRepository;
        $this->_areaLocationRepository = new AreaLocationRepository;
        $this->module = "CulinaryPlace";

        $this->_logHelper = new LogHelper;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // Authorize
        if (Gate::denies(__FUNCTION__, $this->module)) {
            return redirect('unauthorize');
        }

        $culinaryPlaces      = $this->_culinaryPlaceRepository->getAll();
        $areaLocations    = $this->_areaLocationRepository->getAll();

        return view('culinaryplace::index', compact('culinaryPlaces', 'areaLocations'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        // Authorize
        if (Gate::denies(__FUNCTION__, $this->module)) {
            return redirect('unauthorize');
        }

        return view('culinaryplace::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        // Authorize
        if (Gate::denies(__FUNCTION__, $this->module)) {
            return redirect('unauthorize');
        }

        DB::beginTransaction();

        $this->_culinaryPlaceRepository->insert(DataHelper::_normalizeParams($request->all(), true));

        $this->_logHelper->store($this->module, $request->culinary_place_title, 'create');

        DB::commit();

        return redirect('culinary-place')->with('message', 'Kuliner berhasil ditambahkan');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        // Authorize
        if (Gate::denies(__FUNCTION__, $this->module)) {
            return redirect('unauthorize');
        }

        return view('culinaryplace::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        // Authorize
        if (Gate::denies(__FUNCTION__, $this->module)) {
            return redirect('unauthorize');
        }

        return view('culinaryplace::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        // Authorize
        if (Gate::denies(__FUNCTION__, $this->module)) {
            return redirect('unauthorize');
        }
        DB::beginTransaction();

        $this->_culinaryPlaceRepository->update(DataHelper::_normalizeParams($request->all(), false, true), $id);
        $this->_logHelper->store($this->module, $request->culinary_place_title, 'update');

        DB::commit();

        return redirect('culinary-place')->with('message', 'Kuliner berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        // Authorize
        if (Gate::denies(__FUNCTION__, $this->module)) {
            return redirect('unauthorize');
        }
         // Check detail to db
         $detail  = $this->_culinaryPlaceRepository->getById($id);

         if (!$detail) {
             return redirect('culinary-place');
         }
        DB::beginTransaction();
        $this->_culinaryPlaceRepository->delete($id);
        $this->_logHelper->store($this->module, $detail->culinary_place_title, 'delete');
        DB::commit();


        return redirect('culinary-place')->with('message', 'Kuliner berhasil dihapus');
    }

    /**
     * Get data the specified resource in storage.
     * @param int $id
     * @return Response
     */
    public function getdata($id){

        $response   = array('status' => 0, 'result' => array());
        $getDetail  = $this->_culinaryPlaceRepository->getById($id);

        if ($getDetail) {
            $response['status'] = 1;
            $response['result'] = $getDetail;
        }

        return $response;

    }
}
