    <!-- ****** Order form ****** -->
	<div class="container">
		<div class="b-order-form">
				<h2>Отправить заявку</h2>
				<?php echo form_open('send_email'); ?>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="input-group">							  							  
							  <textarea style="height:100px;" class="form-control" placeholder="Текст сообщения" name="inputMessage"></textarea>
							</div>
						</div>
						<div class="col-md-4 col-sm-12">
							<div class="input-group">
							  <span class="input-group-addon"><img src="images/ico1.png" alt=""></span>
							  <input type="text" class="form-control" placeholder="Имя и фамилия" name="inputName">
							</div>
						</div>
						<div class="col-md-4 col-sm-12">
							<div class="input-group">
							  <span class="input-group-addon"><img src="images/ico2.png" alt=""></span>
							  <input type="text" class="form-control" placeholder="Телефон" name="inputPhone">
							</div>
						</div>
						<div class="col-md-4 col-sm-12">
							<div class="b-button"><button class="btn b-button2">Отправить</button></div>
						</div>
					</div>
				</form>
		</div>	
	</div>