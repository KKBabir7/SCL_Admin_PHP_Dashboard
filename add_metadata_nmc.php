<?php include_once './header.php';?>
    <div class="row">
        <div class="col-md-12">
        <h3>Meta Data Entry</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron meta-data-nmc" style="padding:0px !important">
                <div class="form-wrap">	
                   <form id="meta-data-nmc-form">
                       <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label id="name-label" for="name">Connection Code</label>
                                <input type="text" readonly name="name" id="name" placeholder="01" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                                <label>Area Code</label>
                                <div class="custom-select" style="width:100%">
                                    <select id="dropdown" name="role" class="form-control" autofocus required>
                                        <option value="0">Area Code</option>
                                        <option value="102">102</option>
                                        <option value="104">104</option>
                                        <option value="128">128</option>                
                                        <option value="129">129</option>
                                        <option value="130">130</option>
                                        <option value="131">131</option>
                                        <option value="141">141</option>
                                        <option value="142">142</option>
                                        <option value="144">144</option>
                                        <option value="242">242</option>
                                    </select>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="number-label" for="number">Customer code</label>
                                <input type="text" name="age" id="customercode"  class="form-control" placeholder="Customer code" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="fixeddigitr" for="email">Fixed digit</label>
                                <input type="text" name="fixeddigitr" id="fixeddigitr" placeholder="01" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row subbtnandmatching">
                        <div>
                            <button type="submit" id="submit" class="btn my-btn btn-primary btn-block">Calculate</button>
                        </div>
                        <div>
                            <div class="form-group matchingnotmatching" >
                                <div class="custom-control custom-radio custom-control-inline">
                                    <label>
                                        <input type="radio" class="option-input radio" name="example"  />
                                       Matching
                                    </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                   <label>
                                        <input type="radio" class="option-input radio" name="example"  />
                                        Not Matching
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
               </div>	
               <div class="modalMessage">
                <div class="card">
                    <h2>Client Information</h2>
                    <p><strong>Client ID:</strong> 13 digit client id 0110200001016 succesfully generated and matched with Titas Database</p>
                    <p><strong>Customer Code:</strong> 0110200001016</p>
                    <p><strong>Address:</strong> D. M.C- 133 WEST NAKHAL PARA, DHAKA.</p>
                    <p><strong>Name:</strong> AMINUL ISLAM</p>
                    <p><strong>Status:</strong> <span class="status-active">ACTIVE</span></p>
                </div>
             </div>
            </div>
        </div>
    </div>
<?php include_once './footer.php';?>