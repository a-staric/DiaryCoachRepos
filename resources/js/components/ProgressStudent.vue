<template>
  <div>
   <md-card>
      <md-card-header>

        <md-avatar>
            <md-button class="md-icon-button bg-primary">
                <md-icon>person</md-icon>
            </md-button>
        </md-avatar>

        <div class="md-title">{{progress_info.last_name}} {{progress_info.first_name}}</div>
        <div class="md-title">Достижения:</div>
        <div class="md-subhead right">{{progress_info.name}} {{progress_info.result_time}} {{progress_info.result_date}}</div>
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
