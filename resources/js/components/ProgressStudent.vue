<template>
  <div>
   <md-card>
      <md-card-header>
        <div class="md-title">{{progress_info.name}}</div>
        <div class="md-subhead ">{{progress_info.name}} {{progress_info.result_time}} {{progress_info.result_date}}</div>
      </md-card-header>


      <md-card-expand>

        <md-card-actions md-alignment="space-between">
            <div>
                <md-button @click="userProfile(progress_info)">Открыть профиль</md-button>
            </div>

        </md-card-actions>


      </md-card-expand>
    </md-card>
  </div>
</template>

<script>
export default {
  props:[
       'progress_info'
  ],
  data() {
        return {
            progress : this.progress_info
    }
  },
  mounted(){
      this.update()
  },
  methods: {

     update: function(){
        //  console.log(this.student);
     },
     userProfile(progress_info){
        return window.location.href = '/student/'+progress_info.id;
      }
  }

}
</script>
