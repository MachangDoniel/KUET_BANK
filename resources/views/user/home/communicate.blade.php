<section id=communicate class="calculator">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="left-image">
            <img src="user/assets/images/calculator-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-5">
          <div class="section-heading">
            <h6>Get A Financial Plan</h6>
            <h4>or any discussion?</h4>
          </div>
          <form id="calculate" action="{{ route('sendfeedback') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <label for="name">Your Name</label>
                  <input type="name" name="name" id="name" placeholder="" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="email">Your Email</label>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Subject</label>
                  <input type="subject" name="subject" id="subject" placeholder="" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="chooseOption" class="form-label">Your Reason</label>
                  <select name="reason" class="form-select" aria-label="Default select example" id="chooseoption" onchange="this.form.click()">
                      <option type="checkbox" name="" value="" selected>Choose an Option</option>
                      <option type="checkbox" name="onlinebanking" value="onlinebanking">Online Banking</option>
                      <option type="checkbox" name="financialcontrol" value="financialcontrol">Financial Control</option>
                      <option type="checkbox" name="yearlyprofit" value="yearlyprofit">Yearly Profit</option>
                      <option type="checkbox" name="cryptoinvestment" value="cryptoinvestment">Crypto Investment</option>
                      <option type="checkbox" name="loanrequest" value="loanrequest">Loan Request</option>
                  </select>
              </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Submit Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>