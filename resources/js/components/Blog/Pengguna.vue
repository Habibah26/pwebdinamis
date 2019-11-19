<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Pengguna</div>

                    <div class="card-body">
                    <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>NAMA</th>
                      <th style="width: 25%">
                          <center> AKSI</center>
                      </th>
                    </tr>
                      
                    <tr>
                      <td>Habibah</td>
                      <td>
                        <a href><i class="fas fa-eye">Read</i></a>
                        |
                        <a href><i class="fas fa-edit purple">Edit</i></a>
                        |
                        <a href><i class="fas fa-trash-alt red">Hapus</i></a>
                      </td>
                    </tr>
                      
                  </thead>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
