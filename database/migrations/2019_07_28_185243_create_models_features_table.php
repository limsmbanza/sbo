<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateModelsFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_features', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('name');
	    $table->json('value');
            $table->timestamps();
        });

	// Features pour le personnel
       
        DB::table('models_features')->insert([
		   'name'=>'stakeholder.create',
		   'value'=>collect([
			   'text'=>'Ajouter un personnel',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'stakeholder.store',
		   'value'=>collect([
			   'text'=>'Ajouter un personnel',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'stakeholder.index',
		   'value'=>collect([
			   'text'=>"Lister l'ensemble du un personnel",
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);

	DB::table('models_features')->insert([
		   'name'=>'stakeholder.update',
		   'value'=>collect([
			   'text'=>'Modifier un personnel',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);

	DB::table('models_features')->insert([
		   'name'=>'stakeholder.delete',
		   'value'=>collect([
			   'text'=>'Supprimer un personnel',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);


	//Feature pour les Départements

	DB::table('models_features')->insert([
		   'name'=>'departement.create',
		   'value'=>collect([
			   'text'=>'Ajouter un département',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'departement.index',
		   'value'=>collect([
			   'text'=>'Lister tous les départements',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);

	DB::table('models_features')->insert([
		   'name'=>'departement.store',
		   'value'=>collect([
			   'text'=>'Ajouter un département',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	

	DB::table('models_features')->insert([
		   'name'=>'departement.update',
		   'value'=>collect([
			   'text'=>'Modifier un département',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	
	//Feature pour les sous départements

	
	DB::table('models_features')->insert([
		   'name'=>'subdepartement.create',
		   'value'=>collect([
			   'text'=>'Ajouter un sous departement',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	/*
	DB::table('models_features')->insert([
		   'name'=>'subdepartement.create',
		   'value'=>collect([
			   'text'=>'Ajouter un département',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	*/
	
	DB::table('models_features')->insert([
		   'name'=>'subdepartement.index',
		   'value'=>collect([
			   'text'=>'Lister tous les sous départements',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);

	DB::table('models_features')->insert([
		   'name'=>'subdepartement.store',
		   'value'=>collect([
			   'text'=>'Ajouter un sous département',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);

	
	DB::table('models_features')->insert([
		   'name'=>'subdepartement.update',
		   'value'=>collect([
			   'text'=>'Modifier  un sous département',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'subdepartement.delete',
		   'value'=>collect([
			   'text'=>'Supprimer un sous département',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	
	//Feature pour OrderController

	/*
	DB::table('models_features')->insert([
		   'name'=>'order.create',
		   'value'=>collect([
			   'text'=>'Ajouter un département',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'departement.index',
		   'value'=>collect([
			   'text'=>'Lister tous les départements',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);

	DB::table('models_features')->insert([
		   'name'=>'departement.store',
		   'value'=>collect([
			   'text'=>'Ajouter un département',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'departement.create',
		   'value'=>collect([
			   'text'=>'Ajouter un département',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'departement.update',
		   'value'=>collect([
			   'text'=>'Modifier un département',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	*/
	//Feature pour DocumentShared
	
	DB::table('models_features')->insert([
		   'name'=>'documentshared.create',
		   'value'=>collect([
			   'text'=>'Partager un document',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'documentshared.index',
		   'value'=>collect([
			   'text'=>'Lister tous les documents partagés',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);

	DB::table('models_features')->insert([
		   'name'=>'documentshared.store',
		   'value'=>collect([
			   'text'=>'Partager un document',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'documentshared.update',
		   'value'=>collect([
			   'text'=>'Modifier un document partagé',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'documentshared.delete',
		   'value'=>collect([
			   'text'=>'Supprimer un document partagé',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);


	//Feature pour categorie

	
	DB::table('models_features')->insert([
		   'name'=>'category.create',
		   'value'=>collect([
			   'text'=>'Ajouter une catégorie',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'category.index',
		   'value'=>collect([
			   'text'=>'Lister toutes les categories',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);

	DB::table('models_features')->insert([
		   'name'=>'category.store',
		   'value'=>collect([
			   'text'=>'Ajouter une categorie',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'category.update',
		   'value'=>collect([
			   'text'=>'Modifier une catégorie',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'category.delete',
		   'value'=>collect([
			   'text'=>'Supprimer une catégorie',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);

	//Feature pour SubCategorie

		
	DB::table('models_features')->insert([
		   'name'=>'subcategory.create',
		   'value'=>collect([
			   'text'=>'Ajouter une sous catégorie',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'subcategory.index',
		   'value'=>collect([
			   'text'=>'Lister toutes les catégories',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);

	DB::table('models_features')->insert([
		   'name'=>'subcategory.store',
		   'value'=>collect([
			   'text'=>'Ajouter  une sous catégorie',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'subcategory.update',
		   'value'=>collect([
			   'text'=>'Modifier un document partagé',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'subcategory.delete',
		   'value'=>collect([
			   'text'=>'Supprimer une sous catégorie',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);


	//Feature pour Permission
		
	DB::table('models_features')->insert([
		   'name'=>'permission.create',
		   'value'=>collect([
			   'text'=>'Ajouter une permission',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'permission.index',
		   'value'=>collect([
			   'text'=>'Lister toutes les permissions',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);

	DB::table('models_features')->insert([
		   'name'=>'permission.store',
		   'value'=>collect([
			   'text'=>'Ajouter  une permission',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'permission.update',
		   'value'=>collect([
			   'text'=>'Modifier une permission',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);
	
	DB::table('models_features')->insert([
		   'name'=>'permission.delete',
		   'value'=>collect([
			   'text'=>'Supprimer une permission',
			   'icon'=>'',
			   'haveParams'=>false		
			])->toJson()
	]);

	//Feature pour  
	
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models_features');
    }
}
