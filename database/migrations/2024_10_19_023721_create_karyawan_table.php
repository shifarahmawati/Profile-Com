use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('pangkat_golongan');
            $table->string('jabatan');
            $table->enum('jenis_kelamin', ['p', 'l']);
            $table->string('no_hp');
            $table->text('alamat');
            $table->timestamps();
        });

        // Tambahkan kolom unitkerja ke tabel karyawan
        Schema::table('karyawan', function (Blueprint $table) {
            $table->string('unitkerja')->nullable()->after('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Hapus kolom unitkerja jika rollback
        Schema::table('karyawan', function (Blueprint $table) {
            $table->dropColumn('unitkerja');
        });

        Schema::dropIfExists('karyawan');
    }
};
