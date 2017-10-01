<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use App\Modules\Base\BaseModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function view;

class SalesJournalController extends Controller
{

    protected $viewPath = "pages.sales.sales-journal";

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view("{$this->viewPath}.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $sj = new BaseModel();

        $sj->document_date = Carbon::now();
        $sj->due_date      = Carbon::now();

        return view("{$this->viewPath}.form", [
            "sj" => $sj
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
