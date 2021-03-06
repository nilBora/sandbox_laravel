@extends('admin.layout')
@section('content')
<div class="row-fluid section" data-js="add_parsers">
	 <!-- block -->
	<div class="block">
	    <div class="navbar navbar-inner block-header">
	        <div class="muted pull-left">Form Wizard</div>
	    </div>
	    <div class="table-toolbar">
	      <div class="btn-group">
	         <a id="createField"><button class="btn btn-success">Add New <i class="icon-plus icon-white"></i></button></a>
	      </div>
	   </div>
	    <div class="block-content collapse in">
	        <div class="span12">
	            <div id="rootwizard">
	                <div class="navbar">
	                  <div class="navbar-inner">
	                    <div class="container">
			                <ul>
			                    <li><a href="#tab1" data-toggle="tab">Основные</a></li>
			                    <li><a href="#tab2" data-toggle="tab">Парсер</a></li>
			                    <li><a href="#tab3" data-toggle="tab">Системные</a></li>
			                </ul>
		                </div>
	                  </div>
	                </div>
	                <form method="POST" name="createfield">
	                <div class="tab-content">
	                	
	                    <div class="tab-pane" id="tab1">
	                       <div class="form-horizontal">
	                          <fieldset>
	                            <div class="control-group">
	                              <label class="control-label" for="focusedInput">Таблица</label>
	                              <div class="controls">
	                                <input class="input-xlarge focused" name="table" id="focusedInput" type="text" value="{!!$table->system_name!!}">
	                              </div>
	                            </div>
	                            <div class="control-group">
	                              <label class="control-label" for="focusedInput">Колонка</label>
	                              <div class="controls">
	                                <input class="input-xlarge focused" name="column" id="focusedInput" type="text" value="">
	                              </div>
	                            </div>
	                            <div class="control-group">
	                              <label class="control-label" for="focusedInput">Название</label>
	                              <div class="controls">
	                                <input class="input-xlarge focused" name="column_name" id="focusedInput" type="text" value="">
	                              </div>
	                            </div>
	                            <div class="control-group">
	                              <label class="control-label" for="focusedInput">Описание</label>
	                              <div class="controls">
	                                <input class="input-xlarge focused" name="descr" id="focusedInput" type="text" value="">
	                              </div>
	                            </div>
	                            <div class="control-group">
	                              <label class="control-label" for="focusedInput">Группа</label>
	                              <div class="controls">
	                                <input class="input-xlarge focused" name="column_group" id="focusedInput" type="text" value="">
	                              </div>
	                            </div>
	                            <div class="control-group">
	                              <label class="control-label" for="focusedInput">Позиция</label>
	                              <div class="controls">
	                                <input class="input-xlarge focused" name="pos" id="focusedInput" type="text" value="">
	                              </div>
	                            </div>
	                          </fieldset>
	                        </div>
	                    </div>
	                    <div class="tab-pane" id="tab2">
	                        <div class="form-horizontal">
	                          <fieldset>
	                             <div class="control-group js-control-group">
                                  <label class="control-label" for="selectParser">Парсер</label>
                                  <div class="controls" data-js="js_parser">
                                    @if ($parsers)
                                    <select id="selectParser" name="parser" class="js-parser" data-token="{{ csrf_token() }}">
                                      @foreach ($parsers as $one) 
                                    	  <option value="{!!$one['name']!!}">{!!$one['name']!!}</option>
                                      @endforeach
                                    </select>
                                    @endif
                                   
                                  </div>
                                   <div class="parser_conf"></div>
                                </div>
                                
	                          </fieldset>
	                        </div>
	                    </div>
	                    <div class="tab-pane" id="tab3">
	                        <div class="form-horizontal">
	                          <fieldset>
	                            <div class="control-group">
	                              <label class="control-label" for="focusedInput">В таблицу</label>
	                              <div class="controls">
	                              	 <input type="checkbox" value="1" name="show">
	                               
	                              </div>
	                            </div>
	                            <div class="control-group">
	                              <label class="control-label" for="focusedInput">Мультиязычность</label>
	                              <div class="controls">
	                                 <input type="checkbox" value="1" name="multi_lang">
	                              </div>
	                            </div>
	                            <div class="control-group">
	                              <label class="control-label" for="focusedInput">Фильтр</label>
	                              <div class="controls">
	                                 <input type="checkbox" value="1" name="filter">
	                              </div>
	                            </div>
	                          </fieldset>
	                        </div>
	                    </div> 
	                </div>  
	                <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}">
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- /block -->
	</div>
	<script src="/src/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
	
	<script>
	$('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {}});
	</script>
@stop