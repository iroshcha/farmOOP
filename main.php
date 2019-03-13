<?php
		class Farm {

			protected $cowsCount = 0; 
			protected $cowId;
			protected $milkForCow;
			public $milkCount = 0;
			protected $chikensCount = 0;
			protected $chikenId;
			protected $eggForChiken;
			public $eggsCount = 0;

			public function addCow($n){
				$this->cowsCount += $n;
				 for($i = 1; $i <= $this->cowsCount; $i++){
						$this->cowId[$i] = $i;
				}	
			}

			public function аssemblyMilk(){
				 for($i = 1; $i <= $this->cowsCount; $i++){
						$this->milkForCow[$i] = rand(8,12);
						$this->milkCount += $this->milkForCow[$i];
				}
			}

			public function addChikens($n){
				$this->chikensCount += $n;
				 for($i = 1; $i <= $this->chikensCount; $i++){
						$this->chikenId[$i] = $i;
				}	
			}

			public function аssemblyEggs(){
				 for($i = 1; $i <= $this->chikensCount; $i++){
						$this->eggForChiken[$i] = rand(0,1);
						$this->eggsCount += $this->eggForChiken[$i];
				}
			}
		}

		$farm = new Farm();
		$farm->addChikens(15);
		$farm->addChikens(5);
		$farm->аssemblyEggs();
		$farm->addCow(10);
		$farm->аssemblyMilk();
		echo 'Колличество, собраныйх яиц: '.$farm ->eggsCount.'шт.' ;
		echo '</br>Колличество молока: '.$farm ->milkCount.'л.' ;
?>