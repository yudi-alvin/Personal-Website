<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- my custom CSS -->
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
      
    </head>

    <body>
        <div id="game">
            <div class="container-fluid"> 
                <div class="row justify-content-center"> 
                    <div class="col-1 "></div>
                    <div class="col-4 text-center" style="font-weight: bold;font-size: 36px;"> YOU</div> 
                    <div class="col-2 "></div>
                    <div class="col-4 text-center" style="font-weight: bold; font-size: 36px;" > MONSTER</div>  
                    <div class="col-1"></div>   
                </div> 
                <br>
                <div class="row justify-content-center"> 
                    <div class="col-1 "></div>
                    <div class="col-4">
                        <div class="bar"> 
                            <div class="healthbar text-center text-white pt-2" v-bind:style="{width: playerHealth + '%'}">
                                    {{ playerHealth }}
                            </div>
                        </div> 
                    </div>
                    <div class="col-2"></div>
                    <div class="col-4">
                        <div class="bar" > 
                            <div class="healthbar text-center text-white pt-2" v-bind:style="{width: monsterHealth + '%'}">
                                    {{ monsterHealth }}</div>
                        </div>  
                    </div>
                    <div class="col-1 "></div>   
                </div> 
                <br>

                <div class="row justify-content-center" v-if="!gameStatus"> 
                    <div class="col-1 "></div>
                    <div class="col-4 "> 
                        Choose Player's Power:
                        <input type='number' name='playerPower' value=10 min = 10 step=10 v-model="playerPower">
                    </div> 
                    <div class="col-2 text-center">
                        <button v-on:click="startGame" type="button" class ="btn btn-primary">Start New Game </button>
                    </div>
                    <div class=" col-4" > 
                        Choose Monster's Power
                        <input type='number' name='monsterPower' value=10 min = 10 step=10 v-model="monsterPower">
                    </div>  
                    <div class="col-1"></div>   
                </div> 

                <div class="row"  v-else > 
                    <div class="col-1 "></div>
                    <div class="box col-10 text-center m-2 p-2">
                        <button v-on:click="attack" type="button" class ="btn btn-danger text-center text-white">Attack </button>
                        <button v-on:click="specialAttack" type="button" class ="btn btn-warning">Special Attack</button>
                        <button v-on:click="heal" type="button" class ="btn btn-success">Heal</button>
                        <button v-on:click="giveup" type="button" class ="btn btn-outline-info">Give Up!</button>

                    </div>  
                    <div class="col-1 "></div>

                </div>
                <br>
                
                <!-- functionality -->
                <div class="row justify-content-center"> 
                    <div class="col-1 "></div>
                    <div class="box col-10 text-center" v-html="message"></div>
                    <div class="col-1"></div>   
                </div> 

            
                
            </div>
        </div>

        <script>
            var vm = new Vue({
                el: '#game',
                data: { 
                    playerHealth: 100,
                    monsterHealth: 100,
                    gameStatus: false,
                    playerPower: 20,
                    monsterPower: 20,
                    specialAttackCount: 1,
                    healCount: 1,
                    message: "<p class='lead'>Game hasn't started!</p>" ,
                    round : 1,
                    giveupCount: 0,
                    blessing: false
                
                },
                methods: {
                    startGame:function(){
                        console.log("start game function");
                        this.gameStatus = true;
                        this.playerHealth= 100;
                        this.monsterHealth = 100;
                        this.message = "<p class='lead'>Game has started!</p>";
                        this.giveupCount=0;
                        this.specialAttackCount=1;
                        this.healCount=1;
                        this.round=1;
                        
                    },

                    attack: function(){
                        var damage = Math.floor(Math.random() * this.playerPower);
                        this.monsterHealth = this.monsterHealth -damage;
                        this.message = "You attacked and monster suffered " + damage + " points<br>" +this.message;
                        
                        damage = Math.floor(Math.random() * this.monsterPower);
                        this.playerHealth = this.playerHealth -damage;
                        this.message = "Monster attacked and you suffered " + damage + " points<br>" +this.message; 

                        this.checkGameStatus();

                    },
                    specialAttack: function(){

                        if (this.specialAttackCount>0){
							var damage = Math.floor(Math.random() * this.playerPower) + this.playerPower;
                            this.monsterHealth = this.monsterHealth -damage;
                            this.message = "You used special attack and monster suffered " + damage + " points<br>" + this.message;

                            damage = Math.floor(Math.random() * this.monsterPower);
                            this.playerHealth = this.playerHealth -damage;
                            this.message = "Monster attacked and you suffered " + damage + " points<br>" +this.message;

                            this.specialAttackCount -= 1;
                            this.checkGameStatus();
                        }else{
                            this.message = "<p class='lead'>You do not have special attack left</p>" +this.message;

                        }
                        

                    },
                    heal: function(){
                        if(this.healCount >0){
                            var heal = Math.floor(Math.random() * this.playerPower);
                            this.playerHealth += heal;
                            this.healCount -=1;
                            this.message = "A wizard has healed you with " + heal + " points<br>" +this.message;
                            
                        }else{
                            this.message= "<p class='lead'>You do not have heal points left</p>" +this.message;

                        }

                    },
                    giveup: function(){
                        this.giveupCount+=1;
                        if (this.giveupCount<2){
                            this.message = "<p class='lead'>Give up is not allowed! Fight till the end! God will bless you!</p>" +this.message;
                            this.blessing= true;
                        }else{
                           
                            this.message = "<p class='lead'>You Gave Up, Loser!</p>";
                            this.gameStatus= false;
                        }

                    },
                    checkGameStatus: function(){
                        
                        
                        if (this.playerHealth <=0 && this.monsterHealth <=0) {
							this.playerHealth=0;
							this.monsterHealth=0;
                            this.message = "<p class='lead'> Both you and the monster died. Game over!<br>" +this.message;
                            this.gameStatus= false;
                            return;

                        }else if(this.playerHealth <=0){
							this.playerHealth = 0;
                            this.message= "<p class='lead'>Too bad, you died, you lost the game!</p><br>" + this.message;
                            this.gameStatus= false;
                            return;

                        }else if(this.monsterHealth <=0){
							this.monsterHealth=0;
                            this.message = "<p class='lead'>Congratulations! You won the game.</p><br>" + this.message;
                            this.gameStatus= false;
                            return;

                        }
						if (this.blessing){
                            this.message = "<p class='lead'>You received god blessing! Heal point + 1</p>" +this.message;
                            this.healCount+=1;
                            this.blessing= false;
                        }
                        if (this.playerHealth>0 && this.playerHealth <10){
                            this.message ="<p class='lead'> Hidden power unleashed!</p>" +this.message;
                            this.message ="<p class='lead'> Power Up by 20 points.</p>" +this.message;
                            this.playerPower += 20;
                        }
                        if (this.monsterHealth>0 && this.monsterHealth <10){
                            this.message ="<p class='lead'> Monster went Berserk!</p><br> you suffered extra damage: 50 health points." + this.message;
                            this.playerHealth -= 50;
                        }
                        this.round += 1
                        if (this.round%10 == 0){
                            this.specialAttackCount += 1;
                            this.message = "<p style='color:orange'> <b>you recovered one special attack point.</b></p>" + this.message;
                        }
						
 
                    },

                }

                
                
            })
        </script>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>     
    </body>
</html>