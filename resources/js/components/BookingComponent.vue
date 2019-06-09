<template>
           <form action="#" method="get" id="bookingform">
                <div class="row">
                    <div class="form-group col-4">
                        <label for="my-input">Check in</label>
                        <input id="my-input"
                        class="form-control" type="date" name="check_in">
                    </div>
                    <div class="form-group col-4">
                        <label for="my-input">Checkout</label>
                        <input id="my-input"
                        class="form-control" type="date" name="check_out">
                    </div>
                    <div class="form-group col-4">
                        <h5>Room</h5>
                       <select @change="onChange($event)"  name="room_id" id="room_id" class="form-control" v-model="key">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                       </select>
                    </div>
                </div>

                <div id="append">
                  <div class="row">
                    <div class="form-group col-4" >
                        <label for="my-input">Adult</label>
                        <input id="my-input"
                        class="form-control" type="number" name="adult">
                    </div>
                  </div>
                </div>
                <div id="append">
                  <div class="row">
                    <div v-for="(room, index) in roomLists" class="form-group col-4">
                        {{room.adult  }}
                        <label for="my-input">Adult</label>
                        <input id="my-input" v-model="room.adult"
                        class="form-control" type="text" name="adult">
                    </div>
                  </div>
                </div>
                <div id="addmsg">
                </div>
                <button type="submit" class="btn btn-primary">Book Now</button>
            </form>
</template>

<script>
export default {
    // mounted() {
    //     console.log('Bookign Form');
    // },

    data(){
        return {
            key: '',
            roomLists: [
                {'id':1, adult: 'adult1', child: 'child1'},
                {'id':2, adult: 'adult2', child: 'child2'},
                {'id':3, adult: 'adult3', child: 'child3'},
            ]
        }
    },


    methods:{
      onChange(event) {
            console.log(event.target.value);
        }
    }
}
</script>
