<div class="p-4">
    <input type="text" wire:model="search" placeholder="Search for title/genre/year..." class="w-100 rounded-1 border-1 border-secondary bg-secondary-emphasis px-2 py-1 mb-4" style="--bs-border-opacity: .5; outline: none;">

    
    <div>
        <form wire:submit.prevent="addMovie">
            <table class="table table-bordered">
                <tr>
                    <td class="bg-secondary" style="--bs-bg-opacity: .4;"><label for="title">Title</label></td>
                    <td class="text-center bg-secondary" style="--bs-bg-opacity: .4;"><label for="genre">Genre</label></td>
                    <td class="text-center bg-secondary" style="--bs-bg-opacity: .4;"><label for="year">Release Year</label></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="title" wire:model="title" class="w-100 rounded-1 border-1 border-secondary bg-secondary-emphasis px-2 py-1" style="--bs-border-opacity: .5; outline: none;" placeholder="Movie name..." required>
                        @error('title') <span class="error">{{ $message }}</span> @enderror
                    </td>
                    <td>
                        <select id="genre" wire:model="genre" class="w-100 rounded-1 border-1 border-secondary bg-secondary-emphasis px-2 py-1" style="--bs-border-opacity: .5; outline: none;" placeholder="Genre..." required>
                            <option value="Action">Action</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Drama">Drama</option>
                            <option value="Action">Sci-Fi</option>
                        </select>
                        @error('genre') <span class="error">{{ $message }}</span> @enderror
                    </td>
                    <td>
                        <input type="number" id="year" wire:model="year" class="w-100 rounded-1 border-1 border-secondary bg-secondary-emphasis px-2 py-1" style="--bs-border-opacity: .5; outline: none;" required>
                        @error('year') <span class="error">{{ $message }}</span> @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-primary">Add Movie</button>
                    </td>
                </tr>
            </table>    
        </form>
    </div>

    <div class="overflow-auto">
        <table class="table table-bordered">
            <tr>
                <td class="bg-secondary " style="--bs-bg-opacity: .4;">Title <button class="btn btn-primary py-1" wire:click="toggleSort('title')" style="transform: rotate(90deg); border: 0;">&#10095;</button></td>
                <td class="text-center bg-secondary " style="--bs-bg-opacity: .4; display:inline-block;">
                    <p>
                    Genre 
                    <button class="btn btn-primary py-1" wire:click="toggleSort('genre')" style="transform: rotate(90deg); border: 0;">&#10095;</button>
                    </p>
                </td>
                <td class="text-center bg-secondary " style="--bs-bg-opacity: .4;">Release Year <button class="btn btn-primary py-1" wire:click="toggleSort('year')" style="transform: rotate(90deg); border: 0;">&#10095;</button></td>
                <td class="text-center bg-secondary " style="--bs-bg-opacity: .4;"></td>
            </tr>
            @foreach ($movies as $movie)
            <tr>
                <td class="bg-secondary" style="--bs-bg-opacity: .2;">{{ $movie->title }}</td>
                <td class="text-center bg-secondary" style="--bs-bg-opacity: .2;">{{ $movie->genre }}</td>
                <td class="text-center bg-secondary" style="--bs-bg-opacity: .2;">{{ $movie->year }}</td>
                <td class="text-center bg-secondary" style="--bs-bg-opacity: .2;"><button class="btn btn-primary" wire:click="deleteMovie({{ $movie->id }})">Delete</button></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

