<template>
<div class="demo-input-suffix">
  <span class="demo-input-label"></span>
        <el-input
    placeholder="Type something"
    prefix-icon="el-icon-search"
    v-model="input">
  </el-input>
    </div>
</template>

<script>
    export default {
    data() {
     return {
         input: ''
             }
         }
    }
</script>