<template>
<div>
  <el-row>
  <el-col :span="8" v-for="(o, index) in 1" :key="o" :offset="index > 0 ? 2 : 0">
    <el-card :body-style="{ padding: '0px' }">
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAclBMVEUBAQH////29va2trbb29tubm4yMjINDQ1KSkplZWWwsLBOTk5GRkYQEBDo6OisrKwXFxfV1dX5+fnu7u4bGxuHh4ejo6Nzc3NUVFTg4OCamprPz88fHx9ZWVm7u7vGxsY1NTWenp6BgYFAQEAqKiqRkZFBI2kNAAACaklEQVR4nO3Y23aqMBCAYSZVQY5y0IJUrVrf/xV3QJDQJV601gV7/d+NGclFpokzpJYFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwv7A9z3F8p+N7+cfQ5CB3fN/J/TrIcs/xPPtlK/2p1SVWSiUNPVTFZmE8n6+NIDuGSqXuqQ4W2zIpjsFLV/szeSLhfNkoRda9p7O0t6MnkfgW7OT0miX+0kLJ7Ba8iczNh2uRjRl/pJKu2mAbZn++umd4lOFXKqLO5uy9MaGI/n51z/AoQ1e0vTl7LvLWDPPEe8HynuBBhl6S6E2UnTE7SyVsjulmZk3DgwxLOS51hoU5Xc9Y1oMg7dek8RrOcF5t10H65VUfU/c6UGZXGbPBDIOi6gZeImJ2jKqa1iV0f3jhIn9lMMOLlNVHJP2O0Uz5Uu8vW+IvDWWoO8Wu+RTld/OX12q67vri2A1l6LZt4qI30TiRQVg3/XIizdAazDAX9dl8WUhbP2tuFZ3VRJqhNZjhQS7tl7p8yqy7RNTHdDuVZmgNZfguRXdt6HeMLJTQKi7WZOgMu5beZrgKxSiVftUxuu7nSrK5HeEJuLuHTadoVR2jqyzLfukZvXsZnlWSm3O+Qp2U00a6mpqVZ/TuZbiXb71gLYmxbZGEU7jbt971b6xp6HYW1+8vO30KIzdyryI93FfXqNsvc/f9DzBm2aaM4/hwrYzzvR6Xb4sojmff6Aez9mJo2YfpNEOdYmDb9ur6BhasdBBk9sq+q3tNG/9/2AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH7iHxiCGDrZ84z3AAAAAElFTkSuQmCC" class="image">
      <div style="padding: 14px;">
        <span>Yummy hamburger</span>
        <div class="bottom clearfix">
          <time class="time">{{ currentDate }}</time>
          <el-button type="text" class="button">Operating</el-button>
        </div>
      </div>
    </el-card>
  </el-col>
</el-row>
</div>
</template>
<style>
.time {
    font-size: 13px;
    color: #999;
  }
  
  .bottom {
    margin-top: 13px;
    line-height: 12px;
  }

  .button {
    padding: 0;
    float: right;
  }

  .image {
    width: 100%;
    display: block;
  }

  .clearfix:before,
  .clearfix:after {
      display: table;
      content: "";
  }
  
  .clearfix:after {
      clear: both
  }
</style>
<script>
export default {
  data() {
    return {
      currentDate: new Date()
    };
  }
}
</script>