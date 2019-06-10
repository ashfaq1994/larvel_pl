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
                       <select name="room_id" id="room_id" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                       </select>
                    </div>
                </div>
                <div v-for="(row, index) in rows" :key="index" id="append" class="animated fadeIn">
                  <div class="row">

                    <span class="col-2">
                       Room No {{ index + 1 }}
                    </span>
                    <div class="form-group col-2">
                        <label for="my-input">Adult</label>
                         <a class="num_minus" href="#" @click.prevent="countQty(index, -1)">-</a>
                        <input id="my-input" v-model="row.room"
                        class="form-control" type="number" name="noroom">
                        <a class="num_plus" href="#" @click.prevent="countQty(index, 1)">+</a>
                    </div>
                    <div class="form-group col-2">
                        <label for="my-input">Child</label>
                        <input id="my-input"
                        v-model="row.child"
                        class="form-control" type="number" name="child">
                    </div>
                    <div class="form-group col-2">
                        <label for="my-input">Price</label>
                        <input readonly disabled id="my-input"

                        class="form-control" type="number" name="price">
                    </div>
                  </div>
                    <button :disabled="index == 0" class="button btn-danger" @click.prevent="deleteRow">Deleet row</button>
                </div>
                <button class="button btn-primary" @click.prevent="addRow">Add row</button>
                <button type="submit" class="btn btn-primary">Book Now</button>
            </form>
</template>

<script>
export default {
    mounted() {
     this.selectRoom();
    },
    data(){
        return {
            noRoom: [],
            rows: [],
            key:[],
            roomLists: [
                {'id':1, adult: 'adult1', child: 'child1', room: 10, },
                {'id':2, adult: 'adult2', child: 'child2', room: 10, },
                {'id':3, adult: 'adult3', child: 'child3', room: 10, },
            ],
        }
    },

    methods:{

       selectRoom : function ()
       {
        this.rows.push({
            adult:34,
            child:45,
        })
       },
      addRow: function() {
            var elem = document.createElement('tr');
            this.rows.push({
                adult: 1,
                child: 3,
                room: 10,
            });
        },
        deleteRow: function(index)
        {
        this.rows.splice(index, 1);
        },
        setTmpQty: function(index) {
        return this.roomLists[index].room;
       },



    }
}
</script>
