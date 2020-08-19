<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/jquery.min.js"></script>
  
  <!-- responsive-full-background-image.css stylesheet contains the code you want -->
  
  <!-- Not required: jquery.min.js and presentational-only.js is only used to demonstrate scrolling behavior of the viewport  -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="presentational-only/presentational-only.js"></script>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/minitoggle.js"></script>
  <title>SmartHouse</title>
  
 
  
</head>
<body>
	<div class="application">
	
		<div class="header">
			<span>Умный дом иконка</span>
		</div>
		<div class="info_block">
			<div class="time_block">
				<span>ЧЕТВЕРГ</span>
				<span>20.06.2019</span>
				<span>15:15</span>
			</div>
			<div class="temp_block">
				<span>ТЕМПЕРАТУРА</span>
				<span>20 *С</span>
			</div>
			<div class="electro_block">
				<span>ЭЛЕКТРИЧЕСТВО</span>
				<span>3.8 кВт</span>
			</div>
			<div class="security_block">
				<span>СИГНАЛИЗАЦИЯ</span>
				<div class="switch-btn" data-id="#bl-1" style="margin: 10px;"></div>
			</div>
		</div>
		
		
		<div class="rooms">
		
		
			<div class="room" id="kitchen">
				<div class="room_title">
						К У Х Н Я
				</div>
				<div class="room_info">
					<div class="room_temp">
						<img src="../img/temp.png" width="22" height="38"/>
						<span class="temp">18°C</span>
						<span>Температура</span>
					</div>
					<div class="room_hum">
						<img src="../img/hum.png" width="23" height="38"/>
						<span class="hum">45%</span>
						<span>Влажность</span>
					</div>
				</div>
				
				<div class="climat">
					<div class="climat_title">
						<span>Климат контроль</span>
						<img src="../img/options_m.png" width="20" height="16"/>
					</div>
				
					
					<div class="type_title">
						<span>Вентиляция</span>
						<span>Отопление</span>
					</div>
						   
							<div class="climat_control">
							
							  <div id="kitchen_fan" class="switch-btn" data-id="#bl-1" style="margin: 10px;"></div>
							  
							  <div class="value-button" id="decrease" onclick="decreaseValue('kitchen_temp')" value="Decrease Value">-</div>
							  <input class="number" type="number" id="kitchen_temp" value="0" />
							  <div class="value-button" id="increase" onclick="increaseValue('kitchen_temp')" value="Increase Value">+</div>
							  
							  <div id="kitchen_heat" class="switch-btn" data-id="#bl-1" style="margin: 10px;"></div>
							  
							</div>
						    
					
					<div class="temp_title">
						<span>Температура</span>
					</div>
				
				</div>
			</div>
			
			
			<div class="room" id="host">
				<div class="room_title">
					Г О С Т И Н А Я
				</div>
				<div class="room_info">
					<div class="room_temp">
						<img src="../img/temp.png" width="22" height="38"/>
						<span class="temp">22°C</span>
						<span>Температура</span>
					</div>
					<div class="room_hum">
						<img src="../img/hum.png" width="23" height="38"/>
						<span class="hum">35%</span>
						<span>Влажность</span>
					</div>
				</div>
				
				<div class="climat">
					<div class="climat_title">
						<span>Климат контроль</span>
						<img src="../img/options_m.png" width="20" height="16"/>
					</div>
				
					
					<div class="type_title">
						<span>Вентиляция</span>
						<span>Отопление</span>
					</div>
						   
							<div class="climat_control">
							
							  <div id="kitchen_fan" class="switch-btn" data-id="#bl-1" style="margin: 10px;"></div>
							  
							  <div class="value-button" id="decrease" onclick="decreaseValue('host_temp')" value="Decrease Value">-</div>
							  <input class="number" type="number" id="host_temp" value="0" />
							  <div class="value-button" id="increase" onclick="increaseValue('host_temp')" value="Increase Value">+</div>
							  
							  <div id="kitchen_heat" class="switch-btn" data-id="#bl-1" style="margin: 10px;"></div>
							  
							</div>
						    
					
					<div class="temp_title">
						<span>Температура</span>
					</div>
				
				</div>
			</div>
			
			
			<div class="room" id="bedroom">
				<div class="room_title">
					С П А Л Ь Н А Я
				</div>
				<div class="room_info">
					<div class="room_temp">
						<img src="../img/temp.png" width="22" height="38"/>
						<span class="temp">17°C</span>
						<span>Температура</span>
					</div>
					<div class="room_hum">
						<img src="../img/hum.png" width="23" height="38"/>
						<span class="hum">43%</span>
						<span>Влажность</span>
					</div>
				</div>
				
				<div class="climat">
					<div class="climat_title">
						<span>Климат контроль</span>
						<img src="../img/options_m.png" width="20" height="16"/>
					</div>
				
					
					<div class="type_title">
						<span>Вентиляция</span>
						<span>Отопление</span>
					</div>
						   
							<div class="climat_control">
							
							  <div id="kitchen_fan" class="switch-btn" data-id="#bl-1" style="margin: 10px;"></div>
							  
							  <div class="value-button" id="decrease" onclick="decreaseValue('bed_temp')" value="">-</div>
							  <input class="number" type="number" id="bed_temp" value="0" />
							  <div class="value-button" id="increase" onclick="increaseValue('bed_temp')" value="">+</div>
							  
							  <div id="kitchen_heat" class="switch-btn" data-id="#bl-1" style="margin: 10px;"></div>
							  
							</div>
						    
					
					<div class="temp_title">
						<span>Температура</span>
					</div>
				
				</div>
				
				<div class="light">
					<div class="light_on">
						<span>Включить</span>
					</div>
					<div class="light_off">
						<span>Выключить</span>
					</div>
					<div class="light_auto">
						<span>Автономно</span>
					</div>
				</div>
			</div>
			
			
		</div>
		
		
		
	</div>

	 <script type="text/javascript">
	 function increaseValue(room_temp) {
				  var value = parseInt(document.getElementById(room_temp).value, 10);
				  value = isNaN(value) ? 0 : value;
				  value++;
				  document.getElementById(room_temp).value = value;
				}

				function decreaseValue(room_temp) {
				  var value = parseInt(document.getElementById(room_temp).value, 10);
				  value = isNaN(value) ? 0 : value;
				  value < 1 ? value = 1 : '';
				  value--;
				  document.getElementById(room_temp).value = value;
				}
				
	 function SwitchButton(){
				 $('.switch-btn').click(function (e, changeState) {
				if (changeState === undefined) {
					$(this).toggleClass('switch-on');
				}
				if ($(this).hasClass('switch-on')) {
					$(this).trigger('on.switch');
				} else {
					$(this).trigger('off.switch');
				}
			});
		}
        $(document).ready(function () {
				 
			SwitchButton();
       });
    </script>
	
</body>
</html>
