<?php include('includes/header.php'); ?>
    <div class="row">
        <div class="col-md-12">
        <h3>Meta Data Entry</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron meta-data-nmc" style="padding:0px !important">
                <div class="form-wrap meta-data-nmc-form">	
                   <form id="meta-data-nmc-form" id="firstFormNmc">
                       <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label id="connection" for="name">Connection Code</label>
                                <input type="text" readonly name="connection" id="connection" placeholder="01" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                                <label>Area Code</label>
                                <div class="custom-select" style="width:100%">
                                    <select id="areacode" name="role" class="form-control" autofocus required>
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
                                <label id="customer" for="number">Customer code</label>
                                <input type="text" name="customer" id="customercode"  class="form-control" placeholder="Customer code" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="fixeddigit" for="email">Fixed digit</label>
                                <input type="text" name="fixeddigit" id="fixeddigit" placeholder="01" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row subbtnandmatching">
                        <div>
                            <button   onclick="openNmcData()" type="button" id="calculate" class="btn my-btn-claculate btn-primary btn-block">Calculate</button>
                        </div>
                        <div>
                            <div class="form-group matchingnotmatching" >
                                <div class="custom-control custom-radio custom-control-inline">
                                    <label>
                                        <input type="radio" class="option-input radio" name="matched_with_titas_db"  />
                                       Matching
                                    </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                   <label>
                                        <input type="radio" class="option-input radio" name="matched_with_titas_db"  />
                                        Not Matching
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
               </div>	
               <div class="metaData-nmc-modal-message" id="nmcModalMessage">
                    <div class="card">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNmcData()"><i class="fas fa-times-circle"></i></a>
                        <h2><i class="fas fa-user-tie"></i> Client Information: </h2>
                        <p><strong>Client ID:</strong> 13 digit client id 0110200001016 succesfully generated and matched with Titas Database</p>
                        <p><strong>Customer Code:</strong> 0110200001016</p>
                        <p><strong>Address:</strong> D. M.C- 133 WEST NAKHAL PARA, DHAKA.</p>
                        <p><strong>Name:</strong> AMINUL ISLAM</p>
                        <p><strong>Status:</strong> <span class="status-active"><i class="fas fa-check-circle"></i> ACTIVE</span></p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mainformmenu" id="mainformmenu">
        <div class="col-md-12">
            <div class="jumbotron meta-data-nmc meta-data-nmc-second" style="padding:0px !important">
                <div class="form-wrap meta-data-nmc-form">	
                   <form id="meta-data-nmc-form" id="submitFormNmc">
                       <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label id="name" for="name">Name</label>
                                    <input type="text"  name="name" id="name" placeholder="Name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label id="uniqecode" for="number">Code</label>
                                    <input type="text" name="uniqecode" id="uniqecode"  class="form-control" placeholder="0110200000116" readonly>
                                </div>
                                <div class="form-group">
                                    <label id="totalpage" for="totalpage">Total Page</label>
                                    <input type="text" name="totalpage" id="totalPage"  class="form-control" placeholder="Total Page" >
                                </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                    <label id="address" for="address">Address</label>
                                    <textarea class="form-control textareaControl" rows="10" placeholder="Address" ></textarea>
                                </div>
                           
                            </div>
                       </div>
                       <div class="row subbtnandmatching">
                        <div>
                            <button type="submit" id="submit" class="btn my-btn-claculate btn-primary btn-block">Submit</button>
                            <br>
                        </div>
                    </div>
                </form>
               </div>	

            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>