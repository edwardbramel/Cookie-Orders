<form name="order" id="order" action="home.php" method="POST">
    <div id="showErrors"></div>
    <!--first-->
    <label class="col-form-label" for="first">Please enter a household first name</label>
    <input type="text" class="form-control" id="first" name="first" placeholder="Jane">
    <span id="errorFirst" class="hide">Please fill in a first name</span>
    <br>
    <!--last-->
    <label class="col-form-label" for="last">Please enter a household last name</label>
    <input type="text" class="form-control" id="last" name="last" placeholder="Doe">
    <span id="errorLast" class="hide">Please fill in a last name</span>
    <br>
    <!--house-->
    <label class="col-form-label" for="house">Select house number</label>
    <select class="form-select" name="house" id="house">
        <option value="--">Select house</option>
        <option value="11001">11001</option>
        <option value="11002">11002</option>
        <option value="11003">11003</option>
        <option value="11004">11004</option>
        <option value="11005">11005</option>
        <option value="11006">11006</option>
    </select>
    <span id="errorHouse" class="hide">Please select a house number!</span>
    <br>
    <!--type of cookies-->
    <label class="col-form-label" for="flavor">What kind of cookies do you want?</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flavor" value="1" id="chocolate">
        <label class="form-check-label" for="chocolate">Chocolate Chip</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flavor" value="2" id="M&M">
        <label class="form-check-label" for="M&M">M&M Chocolate</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flavor" value="3" id="oatmeal">
        <label class="form-check-label" for="oatmeal">Oatmeal Rasin</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flavor" value="4" id="none" checked>
        <label class="form-check-label" for="none">None I do not want anything, thank you</label>
    </div>
    <br>
    <br>
    <!-- terms -->
    <p><a href="policy.html">Terms and Conditions</a></p>
    <input type="checkbox" name="terms" id="terms">
    <label for="terms">I Accept</label>
    <br>
    <!-- submit -->
    <div class="text-center">
        <a href="#">Cancel</a>&nbsp;&nbsp;
        <button class="btn btn-danger" type="submit" value="Submit" id="submit" disabled>Submit</button>
    </div>
</form>