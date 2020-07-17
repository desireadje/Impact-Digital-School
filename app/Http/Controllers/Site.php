<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\input;
use App\Master;
use App\Workshop;

use App\InscriptionModel;

use Validator;
use reponse;

class Site extends Controller
{
    public function home_page()
    {
        return view('site/index');
    }

    public function cours()
    {
        return view('site/cours');
    }

    public function detailCours()
    {
        return view('site/detailCours');
    }

    public function page_ecole()
    {
        return view('site/ecole');
    }

    public function nosClasses()
    {
        return view('site/nosClasse');
    }

    public function evenement()
    {
        return view('site/projet');
    }

    public function projet()
    {
        return view('site/projet');
    }

    public function emplois()
    {
        return view('site/projet');
    }

    public function inscription(Request $request)
    {
        if ($request->isMethod('post')){

            $rules = array(
                'nom' => 'required',
                'prenom' => 'required',
                'telephone' => 'required',
                'email' => 'required',
                'niveau' => 'required',
                'profession' => 'required',
            );

            $validator = Validator::make(input::all(), $rules);

            if ($validator->fails()) {
                return response()::json(array('errors' => $validator->getMessageBag()->toarray()));
            } else {
                $modal_panel = "";
                $dataJson = array();

                $where = InscriptionModel::where('email', '=', $request->email)->first();

                if(is_null($where)){

                    $inscriptionManager = new InscriptionModel();

                    $inscriptionManager->nom = $request->nom;
                    $inscriptionManager->prenom = $request->prenom;
                    $inscriptionManager->telephone = $request->telephone;
                    $inscriptionManager->age = $request->age;
                    $inscriptionManager->email = $request->email;
                    $inscriptionManager->niveau = $request->niveau;
                    $inscriptionManager->profession = $request->profession;
                    $inscriptionManager->attente = $request->attente;
                    $inscriptionManager->etat = 1;

                    $save = $inscriptionManager->save();

                    if ($save) {
                        
                        $modal_panel .= '<div class="text-center">';
                            $modal_panel .= '<div class="modal-header d-flex justify-content-center">';
                                $modal_panel .= '<h1 class="heading">Bienvenu dans la famille</h1>';
                            $modal_panel .= '</div>';
                            $modal_panel .= '<div class="modal-body">';
                                $modal_panel .= '<i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>';
                                $modal_panel .= '<h5>Toute l\'equipe vous remercie pour votre inscription</h5>';
                            $modal_panel .= '</div>';
                        $modal_panel .= '</div>';
        
                        $dataJson = array(
                            'statut' => 1,
                            'info' =>'Bienvenu dans la famille !',
                            'content' => $modal_panel,
                        );
                    }
                } else {

                    $modal_panel .= '<p class="alert alert-warning animated fadeIn well-sm text-justify">
                                        <span class="text-bold mr-sm">Attention !</span> Vous etes déjà de la famille !
                                    </p>';

                    $dataJson = array(
                        'statut' => 0,
                        'info' =>'Vous etes déjà de la famille !',
                        'content' => $modal_panel,
                    );
                }

                return response()->json($dataJson);
            }

        } else {
            return redirect()->route('detailCours');
        }
    }
}
