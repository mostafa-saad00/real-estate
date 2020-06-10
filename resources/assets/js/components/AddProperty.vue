<template>
    <div class="container" id="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">


                <form @submit.prevent="AddProperty" enctype="multipart/form-data" >
                    

                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5>General Information :</h5>
                    </div>
                    <div class="db-add-listing">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Property Title ( English )</label>
                                    <input v-model="form.en_title" type="text" name="en_title" class="form-control filter-input" :class="{ 'is-invalid': form.errors.has('en_title') }" placeholder="Add The Property title here ...">
                                    <has-error :form="form" field="en_title"></has-error>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Property Title ( Arabic )</label>
                                    <input v-model="form.ar_title" type="text" name="ar_title" class="form-control filter-input" :class="{ 'is-invalid': form.errors.has('ar_title') }" placeholder="Add The Property title here ...">
                                    <has-error :form="form" field="ar_title"></has-error>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Select Property Status </label>
                                    <select v-model="form.buyorrent" :class="{ 'is-invalid': form.errors.has('buyorrent') }" name="buyorrent" class="form-control">
                                        <option v-for="buyorrent in buyorrents" v-bind:value="buyorrent" v-text="buyorrent"></option>
                                    </select> 
                                    <has-error :form="form" field="buyorrent"></has-error>                               
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Select City</label>
                                <select v-model="form.city" :class="{ 'is-invalid': form.errors.has('city') }" name="city" class="form-control">
                                    <option>Cairo</option>
                                </select>
                                <has-error :form="form" field="city"></has-error>
                            </div>
                            <div class="col-md-4">
                                <label>Select Area</label>
                                <select v-model="form.area" :class="{ 'is-invalid': form.errors.has('area')}" name="area" class="form-control">
                                    <option>Tagamoaa Al Khames</option>
                                </select>
                                <has-error :form="form" field="area"></has-error>
                            </div>
                            <div class="col-md-4">
                                <label>Select Property Type</label>
                                <select v-model="form.type" :class="{ 'is-invalid': form.errors.has('type')}" class="form-control" name="type">
                                    <option v-for="type in types" v-bind:value="type" v-text="type"></option>
                                </select>
                                <has-error :form="form" field="type"></has-error>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Property Price</label>
                                    <input v-model="form.price" type="text" name="price" class="form-control filter-input" :class="{ 'is-invalid': form.errors.has('price') }" placeholder="$$$$$">
                                    <has-error :form="form" field="price"></has-error>
                                </div>
                            </div>
                            <div class="col-md-12">
                                
                                <div class="form-group">
                                    <label for="list_info">Description ( English )</label>
                                    <textarea v-model="form.en_desc" :class="{ 'is-invalid': form.errors.has('en_desc')}"  class="form-control" name="en_desc"  rows="4"  placeholder="Enter Description here"></textarea>
                                    <has-error :form="form" field="en_desc"></has-error>
                                </div>
                                
                            </div>

                            <div class="col-md-12">
                                
                                <div class="form-group">
                                    <label for="list_info">Description ( Arabic )</label>
                                    <textarea v-model="form.ar_desc" class="form-control" :class="{ 'is-invalid': form.errors.has('ar_desc') }" name="ar_desc"  rows="4"  placeholder="Enter Description here"></textarea>
                                    <has-error :form="form" field="ar_desc"></has-error>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>
                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5>Gallery :</h5>
                    </div>
                    <div class="db-add-listing">
                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="form-group">
                                    <fieldset class="form-group">
                                        <input type="file" name="files" :class="{ 'is-invalid': form.errors.has('files') }" multiple class="form-control-file" id="pro-image" @change="fieldchange" placeholder="upload photos">
                                        <has-error :form="form" field="files"></has-error>
                                    </fieldset>
                                    <div class="preview-images-zone">

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>




                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5>Property Details :</h5>
                    </div>
                    <div class="db-add-listing">
                        <div class="row mb-30">
                            <div class="col-md-4">
                                <label>Property ID</label>
                                <input v-model="form.property_id" type="text" name="property_id" :class="{ 'is-invalid': form.errors.has('property_id') }" class="form-control filter-input" placeholder="ZOAC25">
                                <has-error :form="form" field="property_id"></has-error>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Number of Bedrooms</label>
                                    <select v-model="form.bedrooms" :class="{ 'is-invalid': form.errors.has('bedrooms') }" name="bedrooms" class="form-control">
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                    <has-error :form="form" field="bedrooms"></has-error>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Number of Bathrooms</label>
                                    <select v-model="form.bathrooms" name="bathrooms" class="form-control" :class="{ 'is-invalid': form.errors.has('bathrooms') }">

                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                    <has-error :form="form" field="bathrooms"></has-error>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Number of Garages</label>
                                    <select v-model="form.parking" :class="{ 'is-invalid': form.errors.has('parking') }" name="parking" class="form-control">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                    <has-error :form="form" field="parking"></has-error>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Total Area</label>
                                    <input v-model="form.total_area" type="text" name="total_area" :class="{ 'is-invalid': form.errors.has('total_area') }" class="form-control filter-input" placeholder="Total area in m2">
                                    <has-error :form="form" field="total_area"></has-error>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Add Property</button>
                

                </form>



            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                buyorrents: ['For Sale', 'For Rent'],
                types: ['Apartment', 'Villa', 'Townhouse', 'penthouse', 'Compound', 'Chalet', 'Twin house', 'Duplex', 'Full floor', 'Half floor', 'Whole Building', 'Land', 'Bulk sale unit', 'Bungalow', 'Hotel Apartment', 'iVilla'],



                form: new Form({
                    en_title: '',
                    ar_title: '',
                    buyorrent: '',
                    city: '',
                    area: '',
                    type: '',
                    price: '',
                    en_desc: '',
                    ar_desc: '',
                    property_id: '',
                    bedrooms: '',
                    bathrooms: '',
                    parking: '',
                    total_area: '',
                    files: [],
                
                })
            }
        },
        methods: {
            fieldchange(e){
                this.form.files = []
                let files = e.target.files;
                
                
                for (let i = 0; i < files.length; i++) 
                {
                    this.form.files.push(files[i]);
                    if (this.form.files[i].type === 'image/png' || this.form.files[i].type === 'image/jpg' || this.form.files[i].type === 'image/jpeg'  ) 
                    {
                         
                    }
                    else
                    {
                        this.form.files = []
                    }
                    
                }
                
                
            },
            AddProperty(){

                this.form.submit('post', '/api/property', {
                              // Transform form data to FormData
                              transformRequest: [function (data, headers) {
                                return objectToFormData(data)
                              }],
                              onUploadProgress: e => {
                                // Do whatever you want with the progress event

                                 if(this.form.files.length < 2)
                                 {
                                    
                                    this.form.files = []
                                    
                                    
                                 }else
                                 {
                                    console.log('asdthis')
                                 }

                              }
                            })
                            .then(({ data }) => {
                              this.form.en_title = '',
                              this.form.ar_title = '',
                              this.form.buyorrent = '',
                              this.form.city = '',
                              this.form.area = '',
                              this.form.type = '',
                              this.form.price = '',
                              this.form.en_desc = '',
                              this.form.ar_desc = '',
                              this.form.property_id = '',
                              this.form.bedrooms = '',
                              this.form.bathrooms = '',
                              this.form.parking = '',
                              this.form.total_area = '',
                              this.form.files = [],
                              
                             
                              document.getElementById("pro-image").value = "";
                              window.scrollTo(0, 0)

                              toast.fire({
                                icon: 'success',
                                title: 'Property Added successfully'
                              })
                            })

            },


                
            
        

                

            
        },
        created() {
           
        }
    };
</script>