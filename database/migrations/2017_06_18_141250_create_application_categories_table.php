  <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_categories', function (Blueprint $table) {
            $table->integer('application_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->unique(array('application_id', 'category_id'));

            $table->foreign('application_id')
                ->references('id')->on('applications')
                ->onDelete('cascade');
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Log::info('DROP APPLICATION CATEGORIES');
        Schema::table('application_categories', function(Blueprint $table) {
            $table->dropForeign(['application_id']);
            $table->dropForeign(['category_id']);

            $table->dropUnique(array('application_id', 'category_id'));
        });
        Schema::dropIfExists('application_categories');
    }
}
