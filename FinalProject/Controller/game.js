		window.onload = function() {
			var game = new Phaser.Game(300, 500, Phaser.AUTO, 'game', {
				preload : preload,
				create : create,
				update : update
			});
			var score = 0;
			var kill = 0;
			var sonido;
			var starSpeed = 100;
			var starLoop = 0.5;
            var i = 1;
            var t;
            var style;
            var explosions;
            var stateText;
            var scoreString = '';
            var scoreText;

			function preload() {
				 game.load.image('starfield', 'assets/starfield.png');
				game.load.image('star', 'assets/enemyOne.png');
				game.load.image('dude', 'assets/playerOne.png', 30, 35);
				game.load.spritesheet('kaboom', 'assets/explode.png', 128, 128);
				game.load.audio('spop', 'assets/explosion.mp3');
				game.load.audio('backgroundMusic', 'assets/backgroundMusic.mp3');
			}

			function create() {
				
				game.physics.startSystem(Phaser.Physics.ARCADE);
				 starfield = game.add.tileSprite(0, 0, 800, 600, 'starfield');
				
				// Aﾃｱadimos el sprite del jugador en la coordenada (32,game.world.height)
				player = game.add.sprite(32, game.world.height - 150, 'dude');

				// Activamos la fﾃｭsica al jugador
				game.physics.arcade.enable(player);
				// Propiedades de la fﾃｭsica: Bote, gravedad y colisiones en el world
				//player.body.bounce.y = 0;
				//player.body.gravity.y = 0;
				player.body.collideWorldBounds = true;
				// Our two animations, walking left and right.

				//player.animations.add('left', [ 0], 10, true);
				//player.animations.add('right', [ 2 ], 10, true);

				stars = game.add.group();
				stars.enableBody = true;
				// Here we'll create 12 of them evenly spaced apart
				
				game.time.events.loop(Phaser.Timer.SECOND*10,timeChange, this);
				game.time.events.loop(Phaser.Timer.SECOND*starLoop,createStar, this);
				game.time.events.loop(Phaser.Timer.SECOND*0.5,sumScore, this);




			    //  The score
			    scoreString = 'Score : ';
			    scoreText = game.add.text(10, 10, scoreString + score, { font: '34px Arial', fill: '#fff' });

			    //  Text
			    stateText = game.add.text(game.world.centerX,game.world.centerY,' ', { font: '30px Arial', fill: '#fff' });
			    stateText.anchor.setTo(0.5, 0.5);
			    stateText.visible = false;

				sonido = game.add.audio('spop');
				
				music = game.add.audio('backgroundMusic');
				
				music.loop = true; // This is what you are lookig for
				music.play();
				
				game.camera.follow(player);

                style = { font: "65px Arial", fill: "#ff0044", align: "center" };
                t = game.add.text(game.world.centerX-350, 0, score, style);



			}
			
			function timeChange(){
				starLoop = starLoop - i*0.01;
				starSpeed = starSpeed + i*5;
				i++;
			}

			function createStar() {

			    //  A bouncey ball sprite just to visually see what's going on.
			    
			    var star = stars.create(Math.random()*270, 0, 'star');

			    game.physics.enable(star, Phaser.Physics.ARCADE);

			    
			    star.body.velocity.y = starSpeed;

			  
				
			}

			function createExplosion(player){

					explosions = game.add.sprite(player.body.x,player.body.y, 'kaboom');
					explosions.animations.add('kaboom', [ 0,15 ], 10, true);
					explosions.animations.play('kaboom');

				
			}
			

		
			function update() {
				// Collide the player and the stars with the platforms
				
				 starfield.tilePosition.y += 2;
			   
				game.physics.arcade.overlap(player, stars, enemyHitsPlayer, null,
						this);

								

				cursors = game.input.keyboard.createCursorKeys();
				// Reset the players velocity (movement)
				player.body.velocity.y = 0;
				player.body.velocity.x = 0;
				if (cursors.left.isDown) {
					// Move to the left
					player.body.velocity.x -= 150;
					//player.animations.play('left');
				} else if (cursors.right.isDown) {
					// Move to the right
					player.body.velocity.x += 150;
					//player.animations.play('right');
				} else {
					// Stand still
					player.animations.stop();
					//player.frame = 4;
				}
				if (cursors.up.isDown) {
					// Move to the right
					player.body.velocity.y -= 150;
					//player.animations.stop();
				} else if (cursors.down.isDown) {
					// Move to the right
					player.body.velocity.y += 150;
					//player.animations.stop();
				} else {
					// Stand still
					player.animations.stop();
					//player.frame = 4;
				}
				
				// Allow the player to jump if they are touching the ground.
				if (cursors.up.isDown && player.body.touching.down) {
					player.body.velocity.y = -500;
				}

			   

			    

			}
			//function collectStar(player, star) {
				//sonido.play();
				//star.kill();
				// Sumamos 10 a la puntuaciﾃｳn

				//score += 10;
				//scoreText.text = 'Score: ' + score;

                  //Campio los valores antes de que actualize
			//}
			
			function sumScore(){
				score++;         //this value will hold the score of every player. I need to pass it to the leader board using php. How?
                scoreText.text = scoreString + score;
			}

			function endGame(){
					finalScore = score;

					submitScore("pru", finalScore);
				}

			function enemyHitsPlayer (player, star) {
			    
			    star.kill();



			    //  And create an explosion :)
			    createExplosion(player);

			    // When the player dies
					scoreText.visible = false;
			        player.kill();
			        stars.callAll('kill');

			        endGame();

			        stateText.text=" GAME OVER \n Click to restart \n "+nickname+"\n Score: "+finalScore;
			        stateText.visible = true;

			        

			        //the "click to restart" handler
			        
			    

			}

		function restart () {
			score=-1;
			starSpeed = 100;
			starLoop = 0.5;
            i = 1;

		    //  And brings the aliens back from the dead :)
		    stars.removeAll();
		    createStar();
		    
			
		    //revives the player
		    player.revive();
		    //hides the text
		    stateText.visible = false;
		    scoreText.visible = true;

		}
			function submitScore(username, score) {

				sonido.play();
				

			    var data="nicknameNew="+nickname+"&scoreNew="+score;
				
			    var request = new XMLHttpRequest();
			    request.open('POST', '../Controller/GameAdd.php', true);
			    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
			    request.onload = function() {
			      if (request.status >= 200 && request.status < 400){
						explosions.kill();
				        game.input.onTap.addOnce(restart,this);
				        console.log(data);
			      } else {
			        // We reached our target server, but it returned an error

			      }
			    };  
			    request.send(data);
			}


						

		};