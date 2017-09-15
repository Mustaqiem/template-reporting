<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 16px;
}

.black-list {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}



button:hover, a:hover {
  opacity: 0.7;
}
</style>

<div class="middle">
    <div class="card">
      <img src="https://thumb7.shutterstock.com/display_pic_with_logo/3067298/502432927/stock-photo-original-oil-painting-on-canvas-beautiful-multicolored-peacock-modern-art-502432927.jpg" alt="John" width="400" height="300">
      <h2>Jonn sparrow</h2>
      <h6 class="title">jonn@gmail.com</h6>
      <h6>085708037533</h6>
      <h6><i>Jl. suaka suka gua jakarta jogja solo</i></h6>
     <h6><span class="black-list"></span ></h6>
    </div>
</div>
<div class="right col-md-6">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#wali">Daftar wali</a></li>
        <li><a data-toggle="tab" href="#editProf">Edit profil</a></li>
        <li><a data-toggle="tab" href="#password">Password</a></li>
    </ul>

    <div class="tab-content">
        <div id="wali" class="tab-pane fade in active">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr class="cennter">
                            <td>
                                <a href="#">
                                <img  width="80" src="https://thumb7.shutterstock.com/display_pic_with_logo/3067298/502432927/stock-photo-original-oil-painting-on-canvas-beautiful-multicolored-peacock-modern-art-502432927.jpg" alt="Not image">
                                <br><b> Sumirah </b>
                                </a><br>
                                <span class="small"><a href="#" class="color-white">Hapus</a></span>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>

        <div id="editProf" class="tab-pane fade  ">
            <form>
              <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="">Phone</label>
                <input type="number" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label >Jenis kelamin</label>
                <select class="form-control" name="">
                    <option value="">Laki-Laki</option>
                    <option value="">Perempuan</option>
                </select>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>

        <div id="password" class="tab-pane fade">
            <form>

              <div class="form-group">
                <label for="email">Password baru</label>
                <input type="password" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="email">Password lama</label>
                <input type="password" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email">
              </div>


              <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

</div>
