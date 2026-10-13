namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
public function profil()
{
return view('mahasiswa.profil', [
'nama' => 'Fauzan',
'nim' => '242520130',
'prodi' => 'Teknologi Informasi'
]);
}
}