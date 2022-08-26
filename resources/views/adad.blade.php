                    <div class="form-group">
                        <label for="service-type">Tipe Servis</label>
                        <select name="service-type" class="form-control form-control-lg" id="service-type" required>
                            <option value="" selected hidden disabled>Pilih tipe service</option>
                            @foreach ($serviceType as $type)
                            <option value="{{$type->id}}" data-type-cost="{{$type->cost}}">
                                {{$type->name}} ({{$type->cost}})</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="voucher">Voucher</label>
                        <select name="voucher" class="form-control form-control-lg" id="vouchers">
                            @if (isset($vouchers) && $vouchers != [])
                            <option value="" data-potong="0">Pilih voucher</option>
                            @foreach ($vouchers as $voucher)
                            <option value="{{$voucher->id}}" data-potong="{{$voucher->voucher->discount_value}}">
                                {{$voucher->voucher->name}}</option>
                            @endforeach
                            @else
                            <option value="0" data-potong="0">Tidak ada voucher yang dimiliki</option>
                            @endif
                        </select>
                    </div>