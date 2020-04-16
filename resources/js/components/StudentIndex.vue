<template>
  <div>
    <md-table md-card v-model="students" md-sort="last_name" md-sort-order="asc" @md-selected="onSelect">
      <md-table-toolbar>
        <h1 class="md-title">Ученики</h1>
      </md-table-toolbar>

      <!-- <md-table-row v-for="info in students_info" :key="info.id"> -->
      <md-table-row slot="md-table-row" slot-scope="{ item }" :class="getClass(item)" md-selectable="single">
        <md-table-cell md-label="Фамилия" md-sort-by="last_name" >{{item.last_name}}</md-table-cell>
        <md-table-cell md-label="Имя" md-sort-by="first_name">{{item.first_name}}</md-table-cell>
        <md-table-cell md-label="Дата рождения" md-sort-by="dob">{{item.dob}}</md-table-cell>
        <md-table-cell md-label="Рост" md-sort-by="height">{{item.height}}</md-table-cell>
        <md-table-cell md-label="Вес" md-sort-by="weight">{{item.weight}}</md-table-cell>
        <!-- <md-table-cell md-label="Описание" md-sort-by="description">{{item.description}}</md-table-cell> -->
      </md-table-row>
    </md-table>
  </div>
</template>

<script>
export default {
  props:[
       'students_info'
  ],
  data() {
        return {
            students : this.students_info
    }
  },
  mounted(){
      this.update()
  },
  methods: {

     update: function(){
         console.log(this.students);
     },
    getClass: ({ id }) => ({
        'md-accent': id > 0
      }),
      onSelect (item) {
        this.selected = item
      }
  }
}
</script>
