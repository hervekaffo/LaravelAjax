<div class="col-lg-10 offset-lg-1">

            <form id="addform" class="bs-component" method="POST" action="{{action('TestController@store')}}" accept-charset="UTF-8" >
              @csrf
<!--
              <div class="form-group">
                <fieldset disabled>
                  <label class="control-label" for="disabledInput">Disabled input</label>
                  <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
                </fieldset>
              </div>

              <div class="form-group">
                <fieldset>
                  <label class="control-label" for="readOnlyInput">Readonly input</label>
                  <input class="form-control" id="readOnlyInput" type="text" placeholder="Readonly input here…" readonly>
                </fieldset>
              </div>
-->
              <div class="form-group has-info">
                <label class="form-control-label" for="inputSuccess1">Name</label>
                <input type="text" value="" class="form-control is-valid" id="inputValid" name="name">
                <div class="valid-feedback"></div>
              </div>

              <div class="form-group has-info">
                <label class="form-control-label" for="inputDanger1">Email</label>
                <input type="text" value="" class="form-control is-invalid" id="inputInvalid" name="email">
                <div class="invalid-feedback"></div>
              </div>

              <div class="form-group has-info">
                <label class="form-control-label" for="inputDanger1">Password</label>
                <input type="password" value="" class="form-control is-invalid" id="inputInvalid" name="password">
                <div class="invalid-feedback"></div>
              </div>
<!--
              <div class="form-group">
                <label class="col-form-label col-form-label-lg" for="inputLarge">Large input</label>
                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="inputLarge">
              </div>

              <div class="form-group">
                <label class="col-form-label" for="inputDefault">Default input</label>
                <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
              </div>

              <div class="form-group">
                <label class="col-form-label col-form-label-sm" for="inputSmall">Small input</label>
                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="inputSmall">
              </div>

              <div class="form-group">
                <label class="control-label">Input addons</label>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">$</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                      <span class="input-group-text">.00</span>
                    </div>
                  </div>
                </div>
              </div>
            -->
            </form>
<!--
            <div class="bs-component">
              <fieldset>
                <legend>Custom forms</legend>
                <div class="form-group">
                  <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                    <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" disabled>
                    <label class="custom-control-label" for="customRadio3">Disabled custom radio</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2" disabled>
                    <label class="custom-control-label" for="customCheck2">Disabled custom checkbox</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                    <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                  </div>
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                    <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                  </div>
                </div>
                <div class="form-group">
                  <select class="custom-select">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile02">
                      <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
-->

    </div>