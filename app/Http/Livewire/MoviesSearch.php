<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Movie;

class MoviesSearch extends Component
{
    public $search = '';
    public $title;
    public $genre;
    public $year;

    public $orderName = 'title';
    public $sortDirection = 'asc';

    public function render()
    {
        $movies = Movie::where('title', 'like', '%' . $this->search . '%')
            ->orWhere('genre', 'like', '%' . $this->search . '%')
            ->orWhere('year', 'like', '%' . $this->search . '%')
            ->orderBy($this->orderName, $this->sortDirection)
            ->get();


        return view('livewire.movies-search', [
            'movies' => $movies
        ]);
    }

    public function toggleSort($orderName)
    {
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        $this->orderName = $orderName;
        $this->emit('sortToggled', $orderName);
    }


    public function addMovie()
    {
        $this->validate([
            'title' => 'required',
            'genre' => 'required',
            'year' => 'required|numeric',
        ]);

        Movie::create([
            'title' => $this->title,
            'genre' => $this->genre,
            'year' => $this->year,
        ]);

        $this->title = '';
        $this->genre = '';
        $this->year = '';

        $this->render();
    }

    public function deleteMovie($movieId)
    {
        $movie = Movie::find($movieId);

        if ($movie) {
            $movie->delete();
            $this->render();
        }
    }

 
}
