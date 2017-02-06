<?php
include 'include/header.php';
?>
<link rel="stylesheet" type="text/css" href="passenger.css">
<body class="container" id="destination">
<br><br><br><br><br>


<div class="col-sm-3 adults-drop-wrapper">
  <div class="row">
    <div class="form-group">
      <!-- <input type="text" class="form-control adults head-count" id="adults" placeholder="Rooms"> -->
      <input type="text" id="noOfPassengers" value="1" class="form-control passengers no-input" placeholder="Passengers" readonly />
      <span class="passenger-text">Guest(s) |</span>
      <span class="rooms-text"><span id="total_rooms">1</span> Room(s)</span>
      <div class="adults-dropdown dropdown-menu select-passenger hide2" style="display: block">
        <div class="col-sm-12">
          <div class="row room" id="room1">
            <div class="col-sm-2">
              <div class="form-group">
                <label class="control-label">Rooms</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number room-minus btn-inc-dec" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="room_count" class="form-control input-number" value="1" min="1" max="4" id="input_rooms">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number room-plus btn-inc-dec" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label class="control-label">Adults</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-minus btn-inc-dec adults" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="adults[]" class="form-control input-number adultscount" value="1" min="1" max="4" id="adults-q">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-plus btn-inc-dec adults" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label class="control-label">Child(0-11)</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-minus btn-inc-dec childs" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs[]" class="form-control input-number childscount" value="0" min="0" max="3" id="childs-q">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-plus btn-inc-dec childs" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 childages" id="childAge1" style="display: none;">
              <div class="form-group">
                <label class="control-label">Child 1 Age</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-minus btn-inc-dec" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs_ages_room1[]" class="form-control input-number" value="0" min="0" max="11" id="childs-age1">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-plus btn-inc-dec" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 childages" id="childAge2" style="display: none;">
              <div class="form-group">
                <label class="control-label">Child 2 Age</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-minus btn-inc-dec" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs_ages_room1[]" class="form-control input-number" value="0" min="0" max="11" id="childs-age2">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-plus btn-inc-dec" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 childages" id="childAge3" style="display: none;">
              <div class="form-group">
                <label class="control-label">Child 3 Age</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-minus btn-inc-dec" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs_ages_room1[]" class="form-control input-number" value="0" min="0" max="11" id="childs-age3">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-plus btn-inc-dec" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row room2" id="room2" style="display: none;">
            <div class="col-sm-2">
              <div class="form-group">
                <label class="control-label invisible">Rooms</label>
                <div class="input-group">
                  <label class="control-label">Room 2</label>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label class="control-label">Adults</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-minus btn-inc-dec adults" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="adults[]" class="form-control input-number adultscount" value="1" min="1" max="4" id="adults-q2">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-plus btn-inc-dec adults" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label class="control-label">Child(0-11)</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-minus btn-inc-dec childs" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs[]" class="form-control input-number childscount" value="0" min="0" max="3" id="childs-q2">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-plus btn-inc-dec childs" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 childages" id="childAge1" style="display: none;">
              <div class="form-group">
                <label class="control-label">Child 1 Age</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-minus btn-inc-dec" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs_ages_room2[]" class="form-control input-number" value="0" min="0" max="11" id="childs-age1">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-plus btn-inc-dec" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 childages" id="childAge2" style="display: none;">
              <div class="form-group">
                <label class="control-label">Child 2 Age</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-minus btn-inc-dec" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs_ages_room2[]" class="form-control input-number" value="0" min="0" max="11" id="childs-age2">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-plus btn-inc-dec" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 childages" id="childAge3" style="display: none;">
              <div class="form-group">
                <label class="control-label">Child 3 Age</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-minus btn-inc-dec" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs_ages_room2[]" class="form-control input-number" value="0" min="0" max="11" id="childs-age3">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-plus btn-inc-dec" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row room3" id="room3" style="display: none;">
            <div class="col-sm-2">
              <div class="form-group">
                <label class="control-label invisible">Rooms</label>
                <div class="input-group">
                  <label class="control-label">Room 3</label>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label class="control-label">Adults</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-minus btn-inc-dec adults" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="adults[]" class="form-control input-number adultscount" value="1" min="1" max="4" id="adults-q3">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-plus btn-inc-dec adults" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label class="control-label">Child(0-11)</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-minus btn-inc-dec childs" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs[]" class="form-control input-number childscount" value="0" min="0" max="3" id="childs-q3">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-plus btn-inc-dec childs" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 childages" id="childAge1" style="display: none;">
              <div class="form-group">
                <label class="control-label">Child 1 Age</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-minus btn-inc-dec" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs_ages_room3[]" class="form-control input-number" value="0" min="0" max="11" id="childs-age1">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-plus btn-inc-dec" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 childages" id="childAge2" style="display: none;">
              <div class="form-group">
                <label class="control-label">Child 2 Age</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-minus btn-inc-dec" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs_ages_room3[]" class="form-control input-number" value="0" min="0" max="11" id="childs-age2">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-plus btn-inc-dec" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 childages" id="childAge3" style="display: none;">
              <div class="form-group">
                <label class="control-label">Child 3 Age</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-minus btn-inc-dec" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs_ages_room3[]" class="form-control input-number" value="0" min="0" max="11" id="childs-age3">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-plus btn-inc-dec" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row room4" id="room4" style="display: none;">
            <div class="col-sm-2">
              <div class="form-group">
                <label class="control-label invisible">Rooms</label>
                <div class="input-group">
                  <label class="control-label">Room 4</label>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label class="control-label">Adults</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-minus btn-inc-dec adults" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="adults[]" class="form-control input-number adultscount" value="1" min="1" max="4" id="adults-q4">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-plus btn-inc-dec adults" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label class="control-label">Child(0-11)</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-minus btn-inc-dec childs" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs[]" class="form-control input-number childscount" value="0" min="0" max="3" id="childs-q4">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number guest-plus btn-inc-dec childs" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 childages" id="childAge1" style="display: none;">
              <div class="form-group">
                <label class="control-label">Child 1 Age</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-minus btn-inc-dec" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs_ages_room4[]" class="form-control input-number" value="0" min="0" max="11" id="childs-age1">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-plus btn-inc-dec" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 childages" id="childAge2" style="display: none;">
              <div class="form-group">
                <label class="control-label">Child 2 Age</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-minus btn-inc-dec" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs_ages_room4[]" class="form-control input-number" value="0" min="0" max="11" id="childs-age2">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-plus btn-inc-dec" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-2 childages" id="childAge3" style="display: none;">
              <div class="form-group">
                <label class="control-label">Child 3 Age</label>
                <div class="input-group">
                  <div class="passenger-inc-dec">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-minus btn-inc-dec" data-type="minus" data-field="quant[1]">
                      -
                      </button>
                    </span>
                    <input type="text" name="childs_ages_room4[]" class="form-control input-number" value="0" min="0" max="11" id="childs-age3">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number quont-plus btn-inc-dec" data-type="plus" data-field="quant[1]">
                      +
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="rightalign push-top-10">
                <!-- <label class="control-label invisible">Child(12-24 Years)</label> -->
                <button type="button" class="done2 btn btn-primary">Done</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include 'include/footer.php';
?>
<script type="text/javascript" src="passenger.js"></script>