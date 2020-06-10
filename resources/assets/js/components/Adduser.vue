<template>
    <div class="container mt-15">




        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="card">
                      <h3 class="card-header text-center">Users</h3>

                      <button type="button" class="btn btn-success" @click="newUser">Add New User</button>

                      

                    </div>
                    
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Roles</th>
                          <th scope="col">Modify</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="user in users" :key="user.id">
                          <th scope="row">{{user.id}}</th>
                          <td>{{user.name}}</td>
                          <td>{{user.email}}</td>
                          <td>{{user.roles}}</td>
                          <td>
                            <a href="#"><i class="fa fa-edit" @click="editModal(user)" style="color:blue;"></i></a>
                            &nbsp
                            <a href="#" @click="deleteUser(user.id)"><i class="fa fa-trash" style="color:red;"></i></a>
                          </td>
                        </tr>


                      </tbody>
                    </table>


                </div>
            </div>
        </div>

        
        <div class="modal fade" id="Add_user_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" v-text="modaltitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form @submit.prevent="CreateUser">

                <div class="modal-body">
                  
                    <div class="form-group">
                      <input v-model="form.name" type="text" name="name" placeholder="Enter name here" 
                        class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" >
                      <has-error :form="form" field="name"></has-error>
                    </div>

                    <div class="form-group">
                      <input v-model="form.email" type="text" name="email" placeholder="Enter email here" 
                        class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                      <has-error :form="form" field="email"></has-error>
                    </div>

                    <div class="form-group">
                      <input v-model="form.password" type="password" name="password"
                        placeholder="write password" 
                        class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                      <has-error :form="form" field="password"></has-error>
                    </div>



                    <div class="form-group">
                    
                      <select v-model="form.roles" name="roles" class="form-control" :class="{ 'is-invalid': form.errors.has('roles') }">
                        <option v-for="right in rights" v-bind:value="right">
                          {{ right }}
                        </option>
                        

                      </select>
                      <has-error :form="form" field="roles"></has-error>
                    </div>
                      
                    



                  
                </div>
                <div class="modal-footer">
                  <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" v-text="modalbutton"></button>
                </div>
              </form>

            </div>
          </div>
        </div>











    </div>
</template>

<script>
    export default {

      data () {
        return {
          users: {},
          modaltitle: "Add New User",
          modalbutton: "Save",
          userId: "",
          rights: ['Admin', 'Super Admin', 'User'],
          
          // Create a new form instance
          form: new Form({
            name: '',
            email: '',
            password: '',
            roles: '',
          })
        }
      },
      methods: {
        editModal(user){
          this.modaltitle = "Edit User"
          this.modalbutton = "Update"
          $("#Add_user_modal").modal('show');
          this.form.fill(user)
          this.userId = user.id


        },
        newUser(){
          this.modaltitle = "Add New User"
          this.modalbutton = "Save"
          this.form.reset()
          $("#Add_user_modal").modal('show');
        },
        deleteUser(id){

          swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.value) {

              this.form.delete('/api/user/' + id)
              .then(()=>{
                 
                 
                 Fire.$emit('refresh');


              })
              .catch(()=>{

              })

              swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
            }
          })

        },
        loadUsers(){

          axios.get('api/user').then(({data}) => (this.users = data.data ));
        },
        CreateUser(){
          if(this.modaltitle == "Add New User")
          {
             this.form.post('/api/user')
             .then(()=>{
                
                $("#Add_user_modal").modal('hide')
                Fire.$emit('refresh');
                toast.fire({
                  icon: 'success',
                  title: 'User Created successfully'
                })

             })
             .catch(()=>{

             })

           }
           else if(this.modaltitle == "Edit User")
           {

            this.form.put('/api/user/' + this.userId)
            .then(()=>{
               $("#Add_user_modal").modal('hide');
               
               Fire.$emit('refresh');


            })
            .catch(()=>{

            })

           }
          
           

        },

      },
        created() {
            this.loadUsers();
            Fire.$on('refresh',()=>{
              this.loadUsers();
            });

        }
    };
</script>