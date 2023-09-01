<section>
    <form method="GET" action="">
        <div>Type:</div>
        <div>
            <input type="checkbox" wire:model="typeInputs" value="clothes" id="clothes"/>
            <label for="clothes">clothes</label>
        </div>
        <div>
            <input type="checkbox" wire:model="typeInputs" value="shoes" id="shoes"/>
            <label for="shoes">shoes</label>
        </div>
        <div>
            <input type="checkbox" wire:model="typeInputs" value="accessories" id="accessories"/>
            <label for="accessories">accessories</label>
        </div>
        <div>
            <div>Category:</div>
            <div>
                <input type="checkbox" value="originals" id="originals"/>
                <label for="originals">originals</label>
            </div>
            <div>
                <input type="checkbox" value="jackets_and_vests" id="jackets_and_vests"/>
                <label for="jackets_and_vests">jackets + vests</label>
            </div>
            {{--            <select name="category" id="category">--}}
            {{--                <option value="originals">originals</option>--}}
            {{--                <option value="jackets_and_vests">jackets_and_vests</option>--}}
            {{--                <!-- Add more options as needed -->--}}
            {{--            </select>--}}
        </div>
        <div>
            <div>
                <input type="checkbox" wire:model="genderInputs" value="female" id="female"/>
                <label for="female">woman</label>
            </div>
            <div>
                <input type="checkbox" wire:model="genderInputs" value="male" id="male"/>
                <label for="male">man</label>
            </div>
        </div>
        <div>
            <button type="submit">Apply Filters</button>
        </div>
    </form>
</section>
