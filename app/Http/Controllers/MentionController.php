<?php

namespace App\Http\Controllers;

use App\Models\Mention;
use Illuminate\Http\Request;

class MentionController extends Controller
{
        // all posts
        public function index()
        {
            $mentions = Mention::all()->toArray();
            return array_reverse($mentions);
        }
      
        // add post
        public function add(Request $request)
        {
            $mention = new Mention([
                'name' => $request->input('name'),
                'description' => $request->input('description')
            ]);
            $mention->save();
      
            return response()->json('mention enregistré');
        }
      
        // edit post
        public function edit($id)
        {
            $mention = Mention::find($id);
            return response()->json($mention);
        }
      
        // update post
        public function update($id, Request $request)
        {
            $mention = Mention::find($id);
            $mention->update($request->all());
      
            return response()->json('post successfully updated');
        }
      
        // delete post
        public function delete($id)
        {
            $mention = Mention::find($id);
            $mention->delete();
      
            return response()->json('post successfully deleted');
        }
}
