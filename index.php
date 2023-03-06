<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
	<title>Movie List</title>
</head>
<body>
	<div class="container">
		<h2>Film più votati</h2>
		<?php
			class Movie {
				public $title;
				public $release_date;
				public $rating;
				public $genres;
				public $description;

				public function __construct($title, $release_date, $rating, $genres, $description) {
					$this->title = $title;
					$this->release_date = $release_date;
					$this->rating = $rating;
					$this->genres = $genres;
					$this->description = $description;
				}

				public function printDetails() {
					echo '<div class="movie">';
					echo '<div class="poster">';
					echo '<img src="https://via.placeholder.com/200x300.png?text='.urlencode($this->title).'">';
					echo '</div>';
					echo '<div class="details">';
					echo '<h3>'.$this->title.'</h3>';
					echo '<p>Release date: '.$this->release_date.'</p>';
					echo '<p>Rating: '.$this->rating.' / 10</p>';
					echo '<p class="genres">Genres: '.$this->genres.'</p>';
					echo '<p>'.$this->description.'</p>';
					echo '</div>';
					echo '</div>';
				}
			}

			$movie1 = new Movie(
				'Il fututo in un bacio',
				'2020-11-05',
				8.4,
				'Bizzarro, Commedia, Thriller',
				'Una descrizione molto lunga di lorem ipsum sit amet. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, corrupti.'
			);
			$movie1->printDetails();

			$movie2 = new Movie(
				'Escape Room',
				'2022-05-10',
				7.8,
				'Azione, Avventura, Horror',
				'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum enim atque id commodi saepe! Perferendis consequuntur ea tempore amet maiores.'
			);
			$movie2->printDetails();
		?>
