@extends('logic')

@section('hasil')
                    @for ($i=0; $i <= $len - 1; $i++)
                        {{ $split[$i]}}
                        @for ($j=0; $j < $len - $i - 1;$j++)
                        0
                        @endfor
                        <br>
                    @endfor
@endsection
