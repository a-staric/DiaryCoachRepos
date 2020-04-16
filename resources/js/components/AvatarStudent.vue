<template>
  <div>
   <md-card>
      <md-card-header>

        <md-avatar>
            <md-button class="md-icon-button bg-primary">
                <md-icon>person</md-icon>
            </md-button>
          <!-- <img src="https://sun9-3.userapi.com/c855028/v855028209/9fecf/tHMb_jaCZBw.jpg" height="" width="" alt="Avatar"> -->
        </md-avatar>

        <div class="md-title">{{student_info.last_name}} {{student_info.first_name}}</div>
        <div class="md-subhead">{{student_info.dob}}</div>
      </md-card-header>


      <md-card-expand>

        <md-card-actions md-alignment="space-between">
            <div>
                <md-button>Открыть профиль</md-button>
            </div>
            <md-card-expand-trigger>
                <md-button>Читаль больше</md-button>
            </md-card-expand-trigger>
        </md-card-actions>

        <md-card-expand-content>
          <md-card-content>
              {{student_info.description}}
            <div>
              Дистанции: 100 м, 150 м
            </div>
          </md-card-content>
        </md-card-expand-content>
      </md-card-expand>
    </md-card>
  </div>
</template>

<script>
export default {
  props:[
       'student_info'
  ],
  data() {
        return {
            student : this.student_info
    }
  },
  mounted(){
      this.update()
  },
  methods: {

     update: function(){
         console.log(this.student);
     }
  }

}
</script>
