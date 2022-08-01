<?php

namespace App\Http\Controllers;
use App\Models\CD;
use App\Models\Book;
use App\Models\Game;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {    
        if(auth()->user()->role=='1'){
            
            return view('admin.dashboard');
        }
        else{
            $books=Book::take(4)->get();
        $cds=Cd::take(4)->get();
        $games=Game::take(4)->get();
        return view('products.main', compact('books', 'cds', 'games'));
        }   
    }
    public function search(Request $request)
    {
        
        $searchproduct = $request->input('search');
        if(!$searchproduct){
            return response(view('errors.404'), 404);
         }
         else{
        $books = Book::where('title', 'LIKE', '%' . $searchproduct . '%')
            ->orwhere('firstname', 'LIKE', '%' . $searchproduct . '%')
            ->orwhere('lastname', 'LIKE', '%' . $searchproduct . '%');
            $cds = Cd::where('title', 'LIKE', '%' . $searchproduct . '%')
            ->orwhere('firstname', 'LIKE', '%' . $searchproduct . '%')
            ->orwhere('lastname', 'LIKE', '%' . $searchproduct . '%');
            $games = Game::where('title', 'LIKE', '%' . $searchproduct . '%')
            ->orwhere('firstname', 'LIKE', '%' . $searchproduct. '%')
            ->orwhere('lastname', 'LIKE', '%' . $searchproduct . '%');

        if ($request->get('sortBy') === 'title') {
            //ordersBy title in ascending order
            $books->orderBy('title', 'ASC');
            $cds->orderBy('title', 'ASC');
            $games->orderBy('title', 'ASC');
        }
        //if request sortBy is equal to author
        if ($request->get('sortBy') === 'priceasc') {
            //ordersBy price in descending order
            $books->orderBy('price', 'DESC');
            $cds->orderBy('title', 'DESC');
            $games->orderBy('title', 'DESC');
        }
        if ($request->get('sortBy') === 'pricedesc') {
            //ordersBy price in descending order
            $books->orderBy('price', 'DESC');
            $cds->orderBy('title', 'DESC');
            $games->orderBy('title', 'DESC');
        }

        return view('products.search',[
            'books' => $books->get(),
            'cds' => $cds->get(),
            'games' => $games->get(),
        ]);
    }
    }
}
