namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComboController extends Controller
{
    public function fetch($combo, Request $request)
    {
        $query = DB::table($combo)->select('id', 'name');
        
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        return response()->json(
            $query->limit(100)->offset($request->input('offset', 0))->get()
        );
    }
}
