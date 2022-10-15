<template>
    <el-upload
      class="avatar-uploader"
      multiple
     
      :action="url"
      :show-file-list="false"
      :on-success="handleAvatarSuccess"
      :on-remove="handleRemove"
      :headers="headers"
      :before-upload="beforeAvatarUpload">
      <div v-for="file in fileList">
      <img v-if=fileList  :src=file.thumb class="avatar">
      
    </div>
      <i  class="el-icon-plus avatar-uploader-icon hd-avatar-uploader-icon"></i>
      <input  hidden type="text" :name="name" :value="imgurl">
    </el-upload>
  </template>
  <style>
    .hd-avatar-uploader-icon {
      /*line-height: 178px !important;*/
    }
  
    .avatar-uploader .el-upload {
      /* border: 1px dashed #d9d9d9; */
      /* border-radius: 6px; */
      cursor: pointer;
      position: relative;
      overflow: hidden;
      display: flex;
      flex-wrap: wrap;
    }
  
    .avatar-uploader-icon:hover {
      border-color: #409EFF;
    }
  
    .avatar-uploader-icon {
      font-size: 28px;
      color: #8c939d;
      width: 178px;
      height: 178px;
      line-height: 178px !important;
      text-align: center;
      border: 1px dashed #d9d9d9;
    }
  
    .avatar {
     
      
      display: block;
      margin-right: 8px;
      overflow: hidden;
    }
  </style>
  <script>
    export default {
      name: 'WfImage',
      props: {
        name: {type: String, default: ''},
        
        allowSize:{default:2},
        url:{type:String}
      },
      data() {
        return {
          src:'',
          headers:{},
          fileList:[],
          imgurl:""
        }
      },
      mounted(){
        this.src=this.imageUrl;
        let token = document.head.querySelector('meta[name="csrf-token"]');
        if (token) {
          this.headers['X-CSRF-TOKEN'] = token.content;
        }
      },
      methods: {
        handleAvatarSuccess(res, file) {
          if (res.code != 0) {
            return this.$message.error(res.message);
          }
          
          this.fileList.push(res) ;
          this.imgurl+=res.file+' ';
          console.log(this.imgurl);
        },
        beforeAvatarUpload(file) {
          const isLt2M = file.size / 1024 / 1024 < this.allowSize;
          const isImage = /(jpg|jpeg|png|gif)$/i.test(file.name);
          if (!isImage) {
            this.$message.error('上传图片不合法!');
          }
          if (!isLt2M) {
            let unit = this.allowSize>1?this.allowSize+'MB':Math.ceil(this.allowSize*1024)+'KB';
            this.$message.error('上传图片大小不能超过 '+unit);
          }
          return isImage && isLt2M;
        },
        handleRemove(file, fileList) {
        }
      }
    }
  </script>
  