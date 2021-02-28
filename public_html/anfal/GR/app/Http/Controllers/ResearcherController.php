<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Researcher;
use App\Grids\ResearchersGrid as ResearchersGridInterface;

class ResearcherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @param ResearchersGridInterface $researchersGrid
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(ResearchersGridInterface $researchersGrid, Request $request)
    {
        // the 'query' argument needs to be an instance of the eloquent query builder
        // you can load relationships at this point
        return $researchersGrid
                    ->create(['query' => Researcher::query(), 'request' => $request])
                    ->renderOn('researchers.index'); // render the grid on the welcome view
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $modal = [
            'model' => class_basename(Researcher::class),
            'route' => route('researchers.store'),
            'action' => 'create',
            'pjaxContainer' => $request->get('ref'),
        ];

        // modal
        return view('vendor.leantony.modal.create-modal', compact('modal'))->render();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required',
            'e_name' => 'required|string',
            'phone' => 'required|numeric',
            'country' => 'required|string',
            'city' => 'required|string',
            'academic_name' => 'required|string',
            'major' => 'required|string',
            'speciality' => 'required|string',
            'institution' => 'required|string',
            'job_title' => 'required|string',
            'birthday' => 'required|date',
            'column_13' => 'required|string'
        ]);
        $researcher = Researcher::query()->create($request->except('_token'));
        return response()->json([
            'success' => true,
            'message' => 'Researcher with id ' . $researcher->id . ' has been created.',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $modal = [
            'model' => class_basename(Researcher::class),
            'route' => route('researchers.updator',$request->researcher),
            'action' => 'edit',
            'pjaxContainer' => $request->get('ref')
            
        ];
            $researcher = Researcher::find($request->researcher);
        

        // modal
        return view('vendor.leantony.modal.edit-modal', compact('modal','researcher'))->render();
        //
    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required',
            'e_name' => 'required|string',
            'phone' => 'required|integer',
            'country' => 'required|string',
            'city' => 'required|string',
            'academic_name' => 'required|string',
            'major' => 'required|string',
            'speciality' => 'required|string',
            'institution' => 'required|string',
            'job_title' => 'required|string',
            'birthday' => 'required|date',
            'column_13' => 'required|string'
        ]);

        $post = Researcher::findOrFail($id);
        $post->update($request->except('_token'));
        return response()->json([
            'success' => true,
            'message' => 'Researcher with id ' . $id . ' has been updated.',
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $researcher = Researcher::findOrFail($request->researcher);
        $researcher->delete($request->researcher);
    }


    public function configureButtons()
{
    // editing the view button
    $this->editToolbarButton('create', [
       'showModal' => true,
       'dataAttributes' => [
        'modal-size' => 'modal-lg'
       ]
    ]);
    $this->editRowButton('view', [
        'showModal' => true,
        'dataAttributes' => [
             'modal-size' => 'modal-lg',
        ]
     ]);
}


}
