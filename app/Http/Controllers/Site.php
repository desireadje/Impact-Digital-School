<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Master;
use App\Workshop;

use App\InscriptionModel;

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
        // if ($request->isMethod('post')){

            $modal_panel = "";
            $dataJson = array();

            // $params = (object) $request->except('inscription');

            // $inscription = $request->all("inscription");
            // $_token = $request->all("_token");
            // inscription: "{\"nom\":\"Adje\",\"prenom\":\"desire\",\"telephone\":\"77867451\",\"age\":\"21\",\"email\":\"dadjdev10@hotmail.com\",\"niveau\":\"Ingenieur\",\"profession\":\"Dev\",\"attente\":\"Dev\"}"


            $dataJson = array(
                'success' => 'Got Simple Ajax Request.',
                'request' => $request->nom,
                // '_token' => $_token,
            );



            /*$json_decode = json_decode($params);

            $inscriptionManager = new InscriptionModel();

            $inscriptionManager->nom = $json_decode->nom;
            $inscriptionManager->prenom = $json_decode->prenom;
            $inscriptionManager->telephone = $json_decode->telephone;
            $inscriptionManager->age = $json_decode->age;
            $inscriptionManager->email = $json_decode->email;
            $inscriptionManager->niveau = $json_decode->niveau;
            $inscriptionManager->profession = $json_decode->profession;
            $inscriptionManager->attente = $json_decode->attente;
            $inscriptionManager->etat = 1;

            $save = $inscriptionManager->save();

            if ($save) {

                $modal_panel .= '<div class="modal-header d-flex justify-content-center">';
                    $modal_panel .= '<h1 class="heading">Bienvenus dans la famille</h1>';
                $modal_panel .= '</div>';
                $modal_panel .= '<div class="modal-body">';
                    $modal_panel .= '<i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>';
                    $modal_panel .= '<h5>Toute l\'equipe vous remercie pour votre inscription</h5>';
                $modal_panel .= '</div>';

                $dataJson = array(
                    'statut' => 1,
                    'info' =>'Bienvenus dans la famille !',
                    'content' => $modal_panel,
                );
            }


            */

            return response()->json($dataJson);
        // } else {
        //     return redirect()->route('detailCours');
        // }
    }
}
