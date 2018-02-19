<?php

namespace App\Http\Controllers;

use App\WebsiteText;
use Illuminate\Http\Request;

class WebsiteTextController extends Controller
{
    public function index(Request $request) {
        $text = (new WebsiteText)->findOrFail($request->input('id'));
        return response()->json($text);
    }

    public function delete(Request $request) {
        $text = (new WebsiteText)->findOrFail($request->input('id'));
        try {
            $text->delete();
        } catch (\Exception $e) {
            return response()->json("Could not delete text: {$e->getMessage()}", 400);
        }
        return response()->json("Success");
    }

    public function store(Request $request) {
        if ($request->has('id')) {
            $text = (new WebsiteText())->findOrFail($request->input('id'));
        } else {
            $text = new WebsiteText();
        }
        $text->textContent = $request->input('textContent', $text->textContent);
        $text->course = $request->input('course', $text->course);
        $text->week = $request->input('week', $text->week);
        $text->save();
        return response()->json($text);
    }
}
