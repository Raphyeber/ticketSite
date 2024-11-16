<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class AdminReviewController extends Controller
{
    public function index() {
        return view('admin.review.index', [
            "reviews" => Review::all()
        ]);
    }

    public function destroy(Review $review)
    {
        Review::destroy($review->id);
        return redirect('admin/review')->with('success', 'Ulasan berhasil dihapus!');
    }
}
