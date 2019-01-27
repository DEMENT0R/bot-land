          <div class="bg_all bg_5 row">
               <div class="col-12 wrapper" style="margin: auto;"></div>
          	<!-- <div class="decoy">5</div> -->
          	<div class="col-12 col-md-10 offset-md-2 row">
          		<div class="col-12 myrow mycol row">
          			<div class="col-12">
          				<h2 class="tomoru-font-1 wow fadeInDown">Цены</h2>
          			</div>
          			<div class="col-12">
          				<h3 class="tomoru-font-2">Рассчитайте примерную стоимость вашего проекта</h3>
          			</div>
          			<div class="col-12 myrow row">
          				<div class="col-12 col-md-8 myrow mycol">
          					<div class="col-12 myrow mycol row">
          						<p class="tomoru-font-3 mb-0">Тип бота <img src="img/icons/question.svg" alt="Помощь"></p>
                        <div class="btn-group btn-group-toggle row col-12 myrow mycol" role="group" aria-label="Basic example" data-toggle="buttons">
                          <label class="btn tomoru-btn-2 col-4 tomoru-font-4 active">
                            <input id="option-1-1" type="radio" name="options1" id="option1-1" autocomplete="off" checked> Текстовый
                          </label>
                          <label class="btn tomoru-btn-2 col-4 tomoru-font-4">
                            <input id="option-1-2" type="radio" name="options1" id="option1-2" autocomplete="off"> Голосовой<br class="d-md-none"> стандартный
                          </label>
                          <label class="btn tomoru-btn-2 col-4 tomoru-font-4">
                            <input id="option-1-3" type="radio" name="options1" id="option1-3" autocomplete="off"> Голосовой<br class="d-md-none"> эксклюзивный
                          </label>
                        </div>
          					</div>
        					<div class="col-12 row mt-3 myrow mycol">
          						<p class="tomoru-font-3 mb-0">Уровень обучаемости <img src="img/icons/question.svg" alt="Помощь"></p>

                      <div class="btn-group btn-group-toggle row col-12 myrow mycol" role="group" aria-label="Basic example" data-toggle="buttons">
                        <label class="btn tomoru-btn-2 col-4 tomoru-font-4">
                          <input id="option-2-1" type="radio" name="options2" id="option2-1" autocomplete="off"> Базовый
                        </label>
                        <label class="btn tomoru-btn-2 col-4 tomoru-font-4 active">
                          <input id="option-2-2" type="radio" name="options2" id="option2-2" autocomplete="off" checked> Продвинутый
                        </label>
                        <label class="btn tomoru-btn-2 col-4 tomoru-font-4">
                          <input id="option-2-3" type="radio" name="options2" id="option2-3" autocomplete="off"> Эксклюзивный
                        </label>
                      </div>
          					</div>
          					<div class="col-12 row mt-5">
                      <div class="col-12 col-md-6 mt-3">
                           <p class="tomoru-font-4">Кол-во сотрудников, в работе которых будет помогать бот *</p>

                           <span id="ex1CurrentSliderValLabel"><span id="ex1SliderVal" class="tomoru-font-2">10</span></span><br>
                           <input id="ex1" type="text" data-slider-min="1" data-slider-max="20" data-slider-step="1" data-slider-value="10" />

                           <script>
                                var slider = new Slider("#ex1");
                                slider.on("slide", function(sliderValue) {
                                     document.getElementById("ex1SliderVal").textContent = sliderValue;
                                });
                           </script>
                      </div>
                      <div class="col-12 col-md-6 mt-3">
                           <p class="tomoru-font-4">Средний доход сотрудника к выплате «на руки» *</p>

                           <span id="ex2CurrentSliderValLabel" class="tomoru-font-2"><span id="ex2SliderVal" class="tomoru-font-2">25000</span> ₽</span><br>
                           <input id="ex2" type="text" data-slider-min="0" data-slider-max="60000" data-slider-step="1000" data-slider-value="25000"/>

                           <script>
                                var slider = new Slider("#ex2");
                                slider.on("slide", function(sliderValue) {
                                     document.getElementById("ex2SliderVal").textContent = sliderValue;
                                });
                           </script>
                      </div>
          						<p class="tomoru-font-4 mt-3">
          							* Эти данные позволяют рассчитать окупаемость проекта 
                      <a href="#land_5" id="calc-now" class="tomoru-font-3 tomoru-btn-1 ml-5 scrollto wow fadeInUp">Рассчитать</a>
          						</p>
          					</div>
          				</div>
          				<div class="col-12 col-md-4">
          					<div class="col-12 tomoru-font-4 row calc-right-block-1">
                      <div class="col-12 mycol">
                        <span class="tomoru-font-2" style="font-weight: 600; color: #06A77D;" id="calc-full-price">100 000 ₽</span><br>
                        <p>Стоимость внедрения (без учета вашей скидки)</p>
                      </div>
                      <div class="col-12 mycol">
            						<span class="tomoru-font-2" style="font-weight: 600; color: #06A77D;" id="calc-minute-price">6 ₽</span><br>
            						<p>Стоимость минуты разговора</p>
                      </div>
                      <div class="col-12 mycol">
            						<span class="tomoru-font-2" style="font-weight: 600; color: #06A77D;" id="calc-staff-economy">40%</span><br>
            						<p>Возможная экономия на сотрудниках</p>
                      </div>
          					</div>
                    <div class="col-12 tomoru-font-4 row calc-right-block-2" style="color: #FFFFFF;">
                        <div class="col-12 mycol">
                          <span class="tomoru-font-2 m-0" style="font-weight: 600; color: #FFFFFF;" id="calc-full-price">1-2 месяца</span>
                          <p>Окупаемость проекта</p>
                        </div>
                        <div class="col-7 mycol">
                          <span class="tomoru-font-2" style="font-weight: 600; color: #FFFFFF;" id="calc-full-price">1 300 000 ₽</span>
                          <p>Экономия за 1 год</p>
                        </div>
                        <div class="col-5 mycol" style="float: right;">
                          <a href="#" class="tomoru-font-3 tomoru-btn-1 mt-auto mb-0" style="background-color: #FFFFFF !important; ">Хочу бота</a>
                        </div>
                        
                    </div>
          				</div>
          			</div>
          		</div>
          	</div>
               <div class="col-12 wrapper" style="margin: auto;"></div>
          </div>