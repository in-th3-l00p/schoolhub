<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\SchoolClass;
use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    public function index(Organization $organization) {
        return $organization->classes()->get();
    }

    public function store(
        Request $request,
        Organization $organization
    ) {
        SchoolClass::create([
            ...$request->validate([
                "name" => "required|min:1|max:255",
                "description" => "nullable"
            ]),
            "organization_id" => $organization->id
        ]);
    }

    public function show(
        Organization $organization,
        SchoolClass $schoolClass
    ) {
        return $schoolClass;
    }

    public function update(
        Request $request,
        Organization $organization,
        SchoolClass $schoolClass
    ) {
        SchoolClass::update($request->validate([
            "name" => "required|min:1|max:255",
            "description" => "nullable"
        ]));
    }

    public function destroy(
        Organization $organization,
        SchoolClass $schoolClass
    ) {
        $schoolClass.delete();
    }
}
