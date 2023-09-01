<section>
    <form method="GET" action="{{ route('catalog.show') }}">
        <label for="type">Type:</label>
        <select name="type" id="type">
            <option value="">All</option>
            <option value="shirt">Shirt</option>
            <option value="pants">Pants</option>
            <!-- Add more options as needed -->
        </select>
        {{--        <button type="submit">Apply Filters</button>--}}
    </form>
</section>
