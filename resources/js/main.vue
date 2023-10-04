<template>
    <select id="select__kind" @change="optionSelected()" style="width: 100px; margin: 0 auto;">
        <option value="" selected>모두</option>
        <option value="인사말">인사말</option>
        <option value="식사">식사</option>
    </select>
</template>


<script>
export default {
    methods: {
        async optionSelected() {
            // 선택한 옵션의 값을 가져오기
            var selectedOption = document.getElementById("select__kind").value;

            // HTTP POST 요청 보내기
            try {
                if (selectedOption !== '') {
                    const response = await axios.post('/send-search', { selectedOption });
                    console.log(response.data); // 서버에서 반환한 데이터
                }
            } catch (error) {
                console.error(error);
            }
        }
    }
}
</script>ㄴ
