<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse as JsonResponseAlias;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{

    /** Index
     * @return JsonResponseAlias
     */
    public function index()
    {
        return Course::get();
    }


    /**store
     * @param Request $request
     * @return JsonResponseAlias
     */
    public function store(Request $request): JsonResponseAlias
    {
        $request->validate([
            'name' => 'required',
            'numbers_credits' => 'required',
            'teacher_name' => 'required',
            'prerequisite_subject' => 'required',
            'number_hours_autonomous' => 'required',
            'number_hours_directed' => 'required',
            'semesters' => 'required'
        ]);
        $courses = Course::create($request->all());
        return Response()->json(compact('courses'));
    }


    /** show
     * @param Course $courses
     * @return JsonResponseAlias
     */
    public function show(Course $courses): JsonResponseAlias
    {
        return response()->json(compact('courses'));
    }


    /** update
     * @param Course $courses
     * @param Request $request
     * @return Course
     */
    public function update(Request $request, $id)
    {
        $product = Course::find($id);
        $product->update($request->all());
        return $product;
    }


    /**
     * @param $id
     * @return int
     */
    public function destroy($id)
    {
        return Course::destroy($id);
    }

    /**
     * @param $name
     * @return mixed
     */
    public function search($name)
    {
        return Course::where('name', 'like', '%' . $name . '%')->get();
    }

    /** Index
     * @return JsonResponseAlias
     */
    public function courseSemesters()
    {
        return Course::get();
    }

}
