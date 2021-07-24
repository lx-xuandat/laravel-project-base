<style>
    .bg-warning {
        background-color: yellow
    }
</style>
{{$full_name}}
{{$count}}

@php
    $name = 'Luu Xuan Dat';
@endphp

<div class="flex-center position-ref full-height">
    <div class="content">
        <h2>Huong Dan Component Co Ban</h2>

        <h3>Truyền dữ liệu vào component</h3>
        <p>Các bạn có thể truyền dữ liệu vào các component tương tự như các thuộc tính HTML.
            <br/>Trong đó, với các dữ liệu đã có giá trị xác định thì được truyền như các thuộc tính HTML đơn giản.
            <br/>Còn đối với dữ liệu là các biểu thức hoặc là biến thì các bạn cần phải thêm tiền tố : ở trước tên thuộc tính
        </p>
        <x-profile
            url="http://lorempixel.com/800/400/cats/Faker/"
            :fullname="$name"
            class="bg-warning"
        />
    </div>
</div>
