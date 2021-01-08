<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form v-on:submit.prevent="submit">
          <div class="form-group row">
            <label for="title" class="col-sm-3 col-form-label">Title</label>
            <input
              type="text"
              class="col-sm-9 form-control"
              id="title"
              v-model="task.title"
              autocomplete="off"
            />
          </div>
          <div class="form-group row">
            <label for="content" class="col-sm-3 col-form-label">Content</label>
            <input
              type="text"
              class="col-sm-9 form-control"
              id="content"
              v-model="task.content"
              autocomplete="off"
            />
          </div>
          <div class="form-group row">
            <label for="person-in-charge" class="col-sm-3 col-form-label"
              >Person In Charge</label
            >
            <input
              type="text"
              class="col-sm-9 form-control"
              id="person-in-charge"
              v-model="task.person_in_charge"
              autocomplete="off"
            />
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
// 各フォームはv-modelでtaskデータとバインディングすることで、
// フォームにデータが入力されたら
// <scripts>側のtaskデータも更新されるようになっています。

// そして、
// <form v-on:submit.prevent="submit">
// で、フォーム送信時に先ほど定義したsubmitメソッドを呼び出すようにしています。

// これで、入力内容が反映されたtaskデータを
// submitメソッドでAPI送信できる状態になっています。
export default {
  data: function () {
    return {
      task: {},
    };
  },
  methods: {
    submit() {
      axios.post("/api/tasks", this.task).then((res) => {
        // タスク一覧ページにリダイレクト
        this.$router.push({ name: "task.list" });
      });
    },
  },
};
</script>
