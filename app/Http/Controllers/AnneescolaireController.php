<?php

namespace App\Http\Controllers;

use App\Models\Anneescolaire;
use Illuminate\Http\Request;

class AnneescolaireController extends Controller
{
        // all posts
        public function index()
        {
            $annees = Anneescolaire::all()->toArray();
            return array_reverse($annees);
        }
      
        // add post
        public function add(Request $request)
        {
            $annee = new Anneescolaire([
                'date_debut' => $request->input('date_debut'),
                'date_fin' => $request->input('date_fin'),
                'etat' => $request->input('etat')
            ]);
            $annee->save();
      
            return response()->json('année enregistré');
        }
      
        // edit post
        public function edit($id)
        {
            $annee = Anneescolaire::find($id);
            return response()->json($annee);
        }
      
        // update post
        public function update($id, Request $request)
        {
            $annee = Anneescolaire::find($id);
            $annee->update($request->all());
      
            return response()->json('post successfully updated');
        }
      
        // delete post
        public function delete($id)
        {
            $annee = Anneescolaire::find($id);
            $annee->delete();
      
            return response()->json('post successfully deleted');
        }
}
